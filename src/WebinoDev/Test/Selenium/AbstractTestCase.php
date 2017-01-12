<?php
/**
 * Webino (http://webino.sk/)
 *
 * @link        https://github.com/webino/WebinoDev/ for the canonical source repository
 * @copyright   Copyright (c) 2014-2017 Webino, s. r. o. (http://webino.sk/)
 * @license     BSD-3-Clause
 */

namespace WebinoDev\Test\Selenium;

use Exception;
use PHPWebDriver_WebDriver;
use PHPWebDriver_WebDriverWait as Wait;
use PHPWebDriver_WebDriverElement as WebDriverElement;
use RuntimeException;

/**
 * Base test case for Selenium WebDriver tests
 */
abstract class AbstractTestCase extends \PHPUnit_Framework_TestCase
{
    use ElementTrait;
    use ElementsTrait;
    use NotifyTrait;
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
    protected static $webDriverBrowser = 'firefox';

    /**
     * @var string
     */
    protected static $webDriverScreen = '1920x1080';

    /**
     * @var string
     */
    protected $browser;

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
     * @var \PHPWebDriver_WebDriverSession|WebDriver\SessionInterface
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

        $this->session->window()->postSize($this->resolveWindowSize());
    }

    /**
     * @return void
     */
    protected function tearDown()
    {
        $this->hasFailed() or $this->session->close();
    }

    /**
     * @param Exception $exc
     * @throws Exception
     */
    protected function onNotSuccessfulTest(Exception $exc)
    {
        $this->notifyError($exc);
        $this->session->close();
        parent::onNotSuccessfulTest($exc);
    }

    /**
     * @return string
     */
    protected function getBrowser()
    {
        return $this->browser ? $this->browser : $this::$webDriverBrowser;
    }

    /**
     * @return string
     */
    protected function getBrowserBin()
    {
        return $this->browserBin;
    }

    /**
     * @param string $bin
     * @return string
     */
    protected function setBrowserBin($bin)
    {
        $this->browserBin = (string) $bin;
        return $this;
    }

    /**
     * @return \PHPWebDriver_WebDriverSession|WebDriver\SessionInterface
     */
    public function getSession()
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
     * @param null $sessId
     * @return string
     */
    protected function source($url, $sessId = null)
    {
        $sid = $sessId ? $sessId : $this->getSessionId();
        $opts = ['http' => ['header' => 'Cookie: PHPSESSID=' . $sid ."\r\n"]];
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
        empty($host) and $host = $this::$webDriverHost;
        return sprintf($host, $this->resolvePort());
    }

    /**
     * Resolve Selenium WebDriver port
     *
     * @return string
     */
    protected function resolvePort()
    {
        $port = getenv('PORT');
        empty($port) and $port = $this::$webDriverPort;
        return $port;
    }

    /**
     * Resolve test session browser
     *
     * @return string
     */
    protected function resolveBrowser()
    {
        $browser = getenv('BROWSER');
        empty($browser) and $browser = $this::$webDriverBrowser;

        switch ($browser) {
            case 'chromium':
                $browser = 'chrome';
                $this->setBrowserBin('/usr/bin/chromium-browser');
                break;
            case 'firefox':
                $this->setBrowserBin('/var/lib/webino/firefox/firefox');
                break;
        }

        return $this->browser = $browser;
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
            case 'firefox':
                $opts = [];
                $bin  = $this->getBrowserBin();
                $bin and $opts+= ['firefox_binary' => $bin];
                return $opts;
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
     * @return array
     */
    protected function resolveWindowSize()
    {
        $screen = getenv('SCREEN');
        empty($screen) and $screen = $this::$webDriverScreen;
        $size = explode('x', $screen);
        return ['width' => (int) $size[0], 'height' => (int) $size[1]];
    }

    /**
     * @param float $sec
     * @return $this
     */
    protected function sleep($sec = 2.0)
    {
        $sec && sleep($sec);
        return $this;
    }

    /**
     * Opens URI and asserts not error
     *
     * @param string $path
     * @param string|null $caption
     * @return $this
     */
    protected function open($path = '', $caption = null)
    {
        $this->session->open($this->uri . $path);
        $this->debugNotify($caption);
        $this->assertNotError();
        return $this;
    }

    /**
     * @param string $path
     * @param string $caption
     * @return $this
     * @todo remove
     * @deprecated use open()
     */
    protected function openOk($path = '', $caption = 'Home')
    {
        return $this->open($path, $caption);
    }

    /**
     * Assert that page is without errors
     *
     * @return $this
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
     * @return bool
     */
    public function is404()
    {
        $url = $this->session->url();
        $headers = get_headers($url);
        if (empty($headers[0])) {
            return true;
        }

        return 'HTTP/1.0 404 Not Found' === $headers[0];
    }

    /**
     * Clicks on a link
     *
     * @param string $linkText
     * @param callable $callback
     * @param float $sleep
     * @return $this
     */
    protected function clickLink($linkText, callable $callback = null, $sleep = 2.0)
    {
        $elm = $this->elementByLinkText($linkText);
        $elm->click();
        $callback and call_user_func($callback, $elm);
        $this->sleep($sleep);
        return $this;
    }

    /**
     * Clicks on ajax-link
     *
     * @param string $linkText
     * @param callable $callback
     * @return $this
     */
    protected function clickAjaxLink($linkText, callable $callback = null)
    {
        $this->clickLink($linkText, $callback, 0);
        $this->waitForAjax();
        return $this;
    }

    /**
     * @param string $class
     * @return $this
     */
    protected function clickByClass($class)
    {
        $this->elementByClassName($class)->click();
        return $this;
    }

    /**
     * @param string $name
     * @param string $value
     * @return $this
     * @deprecated use getSelect()
     */
    protected function clickSelect($name, $value)
    {
        $selector = sprintf('select[name="%s"] option[value="%s"]', $name, $value);
        $this->elementByCssSelector($selector)->click();
        return $this;
    }

    /**
     * @param string $name
     * @return WebDriver\Select
     */
    protected function getSelect($name)
    {
        return new WebDriver\Select($this->elementByName($name));
    }

    /**
     * Enters the input value
     *
     * @param string|WebDriverElement $name
     * @param string $value
     * @param callable|false|null $callback
     * @return $this
     */
    protected function enterInput($name, $value, $callback = null)
    {
        $resolveElm = function () use ($name) {
            if ($name instanceof WebDriver\ElementInterface
                || $name instanceof WebDriverElement
            ) {
                return $name;
            }
            return $this->elementByName($name);
        };

        /** @var WebDriverElement|WebDriver\ElementInterface $elm */
        $elm = $resolveElm();
        if (null === $callback) {
            $this->sleep(1);
            $elm->clear();
            $elm->sendKeys('');
            $this->sleep(1);
        }
        $elm->clear();
        $elm->sendKeys($value);
        is_callable($callback) and call_user_func($callback, $elm);
        return $this;
    }

    /**
     * Submit the input value
     *
     * @param string|WebDriverElement $name
     * @param string $value
     * @return $this
     */
    protected function submitInput($name, $value)
    {
        $this->enterInput($name, $value, function ($elm) {
            /** @var $elm WebDriver\ElementInterface */
            $elm->submit();
        });
        return $this;
    }

    /**
     * Assert that input value is same than expected
     *
     * @param string|WebDriverElement|WebDriver\ElementInterface $name
     * @param string $expectedValue
     * @param callable $callback
     * @return $this
     */
    public function assertInput($name, $expectedValue, callable $callback = null)
    {
        $elm = ($name instanceof WebDriverElement) ? $name : $this->elementByName($name);
        $this->assertSame($expectedValue, $elm->attribute('value'));
        $callback and call_user_func($callback, $elm);
        return $this;
    }

    /**
     * Focus a browser window
     *
     * @param int $index
     * @return $this
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
     * @return $this
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
     * @param callable|object $action
     * @param callable|object $callback
     * @return $this
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
     * @return $this
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
