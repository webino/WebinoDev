<?php
/**
 * Webino (http://webino.sk/)
 *
 * @link        https://github.com/webino/WebinoDev/ for the canonical source repository
 * @copyright   Copyright (c) 2014-2015 Webino, s. r. o. (http://webino.sk/)
 * @license     BSD-3-Clause
 */

namespace WebinoDev\Test\Selenium;

use PHPWebDriver_WebDriver;
use PHPWebDriver_WebDriverWait as Wait;
use PHPWebDriver_WebDriverElement;
use RuntimeException;

/**
 * Base test case for Selenium WebDriver tests
 */
abstract class AbstractTestCase extends \PHPUnit_Framework_TestCase
{
    use ElementTrait;
    use ElementsTrait;
    use ScreenshotTrait;

    /**
     * Selenium Web Driver host URI
     *
     * @var string
     */
    protected static $webDriverHost = 'http://localhost:%s/wd/hub';

    /**
     * Selenium Web Driver port
     *
     * @var string
     */
    protected static $webDriverPort = '4444';

    /**
     * @var string
     */
    protected static $browser = 'htmlunit';

    /**
     * @var string
     */
    protected $browserBin;

    /**
     * @var string
     */
    protected $uri;

    /**
     * @var PHPWebDriver_WebDriver
     */
    protected $webDriver;

    /**
     * @var \PHPWebDriver_WebDriverSession
     */
    protected $session;

    /**
     * Resolves URI to open session
     */
    protected function setUp()
    {
        $this->uri       = $this->resolveUri();
        $this->webDriver = new PHPWebDriver_WebDriver($this->resolveHost());
        $this->session   = $this->webDriver->session($this->resolveBrowser(), $this->resolveCapabilities());
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
        $this->session->close();
    }

    /**
     * @return string
     */
    protected function getBrowser()
    {
        return $this::$browser;
    }

    /**
     * @return string
     */
    protected function getBrowserBin()
    {
        return $this->browserBin;
    }

    /**
     * @return string
     */
    protected function setBrowserBin($bin)
    {
        $this->browserBin = (string) $bin;
        return $this;
    }

    /**
     * @return \PHPWebDriver_WebDriverSession
     */
    protected function getSession()
    {
        return $this->session;
    }

    /**
     * @return string
     */
    protected function getSessionId()
    {
        return $this->session->getCookie('PHPSESSID')['value'];
    }

    /**
     * @return string
     */
    protected function getServerUrl()
    {
        $parts = parse_url($this->session->url());
        return $parts['scheme'] . '://' . $parts['host'];
    }

    /**
     * Get raw source from URL
     *
     * @param string $url
     * @return string
     */
    protected function source($url, $sessId = null)
    {
        $sid = $sessId ? $sessId : $this->getSessionId();
        $opts = ['http' => ['header'=> 'Cookie: PHPSESSID=' . $sid ."\r\n"]];
        return file_get_contents($url, false, stream_context_create($opts));
    }

    /**
     * Resolve Selenium WebDriver host
     *
     * @return string
     */
    protected function resolveHost()
    {
        $host = getenv('HOST');
        empty($host) || $this::$webDriverHost = $host;
        return sprintf($this::$webDriverHost, $this->resolvePort());
    }

    /**
     * Resolve Selenium WebDriver port
     *
     * @return string
     */
    protected function resolvePort()
    {
        $port = getenv('PORT');
        empty($port) || $this::$webDriverPort = $port;
        return $this::$webDriverPort;
    }

    /**
     * Resolve test session browser
     *
     * @return string
     */
    protected function resolveBrowser()
    {
        $browser = getenv('BROWSER');
        empty($browser) || $this::$browser = $browser;

        switch ($this::$browser) {
            case 'chromium':
                $this::$browser = 'chrome';
                $this->setBrowserBin('/usr/bin/chromium-browser');
                break;
        }

        return $this::$browser;
    }

    /**
     * Resolve test session capabilities
     *
     * @return array
     */
    protected function resolveCapabilities()
    {
        switch ($this->getBrowser()) {
            case 'chrome':
                // Fixes OpenVZ
                $opts = ['args' => ['no-sandbox', 'start-maximized']];
                $bin  = $this->getBrowserBin();
                $bin and $opts+= ['binary' => $bin];
                return ['chromeOptions' => $opts];
        }
        return [];
    }

    /**
     * Resolve test target URI
     *
     * @return string
     */
    protected function resolveUri()
    {
        $uri = getenv('URI');
        if (empty($uri)) {
            throw new RuntimeException('Expected URI env');
        }
        return $uri;
    }

    /**
     * Opens URI and asserts not error
     *
     * @param string $path
     * @return self
     */
    protected function openOk($path = '', $caption = 'Home')
    {
        $this->session->open($this->uri . $path);
        $this->attachScreenshot($caption);
        $this->assertNotError();
        return $this;
    }

    /**
     * Assert that page is without errors
     *
     * @return self
     */
    protected function assertNotError()
    {
        $this->assertNotContains('Error', $this->session->title());

        // strip script contents & tags
        $text = $this->session->source();
        $expr = '~<(script).*?>.*?</script>~si';
        $src  = strip_tags(preg_replace($expr, '', $text));

        $this->assertNotContains('Error', $src);
        $this->assertNotContains('Exception', $src);
        return $this;
    }

    /**
     * Clicks on a link
     *
     * @param string $linkText
     * @param callable $callback
     * @return self
     */
    protected function clickLink($linkText, callable $callback = null)
    {
        $elm = $this->elementByLinkText($linkText);
        $elm->click();
        $this->attachScreenshot('Click ' . $linkText);
        $callback and call_user_func($callback, $elm);
        return $this;
    }

    /**
     * Clicks on ajax-link
     *
     * @param string $linkText
     * @param callable $callback
     * @return self
     */
    protected function clickAjaxLink($linkText, callable $callback = null)
    {
        $this->clickLink($linkText, $callback);
        $this->attachScreenshot('Click ' . $linkText);
        $this->waitForAjax();
        $this->attachScreenshot($linkText);
        return $this;
    }

    /**
     * Enters the input value
     *
     * @param string|PHPWebDriver_WebDriverElement $name
     * @param string $value
     * @param callable $callback
     * @return self
     */
    protected function enterInput($name, $value, callable $callback = null)
    {
        $elm = ($name instanceof PHPWebDriver_WebDriverElement) ? $name : $this->elementByName($name);
        $elm->clear();
        $elm->sendKeys($value);
        $this->attachScreenshot('Input ' . $name);
        $callback and call_user_func($callback, $elm);
        return $this;
    }

    /**
     * Submit the input value
     *
     * @param string|PHPWebDriver_WebDriverElement $name
     * @param string $value
     * @return self
     */
    protected function submitInput($name, $value)
    {
        $this->enterInput($name, $value, function ($elm) {
            $elm->submit();
        });
        return $this;
    }

    /**
     * Assert that input value is same than expected
     *
     * @param string|PHPWebDriver_WebDriverElement $name
     * @param string $expectedValue
     * @param callable $callback
     * @return self
     */
    public function assertInput($name, $expectedValue, callable $callback = null)
    {
        $elm = ($name instanceof PHPWebDriver_WebDriverElement) ? $name : $this->elementByName($name);
        $this->assertSame($expectedValue, $elm->attribute('value'));
        $callback and call_user_func($callback, $elm);
        return $this;
    }

    /**
     * Focus a browser window
     *
     * @param int $index
     * @return self
     */
    protected function focusWindow($index)
    {
        $session = $this->getSession();
        $windows = $session->window_handles();
        $session->focusWindow($windows[$index]);
        return $this;
    }

    /**
     * Close a browser window
     *
     * @return self
     */
    protected function closeWindow()
    {
        $this->getSession()->deleteWindow();
        $this->focusWindow(0);
        return $this;
    }

    /**
     * Wait for something, then do something else
     *
     * @param callable $action
     * @param callable $callback
     * @return self
     */
    protected function waitFor(callable $action, callable $callback = null)
    {
        $elm = (new Wait($this->session))->until($action);
        $callback and call_user_func($callback, $elm);
        return $this;
    }

    /**
     * Ajax wait
     *
     * Depends on jQuery.
     *
     * @param float $delay Seconds
     * @return self
     */
    protected function waitForAjax($delay = .1)
    {
        // delay slightly more than required
        $delay and usleep($delay * 1100000);

        $this->waitFor(function () {
            return $this->session->execute(['script' => 'return !jQuery.active', 'args' => []]);
        });

        return $this;
    }
}
