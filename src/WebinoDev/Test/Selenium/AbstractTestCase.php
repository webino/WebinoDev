<?php
/**
 * Webino (http://webino.sk/)
 *
 * @link        https://github.com/webino/WebinoDev/ for the canonical source repository
 * @copyright   Copyright (c) 2014 Webino, s. r. o. (http://webino.sk/)
 * @license     BSD-3-Clause
 */

namespace WebinoDev\Test\Selenium;

use PHPWebDriver_WebDriver;
use PHPWebDriver_WebDriverWait as Wait;
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
     * Selenium Web Driver Host URI
     *
     * @var string
     */
    protected static $webDriverHost = 'http://localhost:4444/wd/hub';

    /**
     * @var string
     */
    protected static $browser = 'htmlunit';

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
        $this->session->window()->maximize() or sleep(.5);
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
     * Resolve Selenium WebDriver host
     *
     * @return string
     */
    protected function resolveHost()
    {
        $host = getenv('HOST');
        empty($host) || $this::$webDriverHost = $host;
        return $this::$webDriverHost;
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
                return ['chromeOptions' => ['args' => ['no-sandbox']]];
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
        $src = $this->session->source();
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
     * @param string $name
     * @param string $value
     * @param callable $callback
     * @return self
     */
    protected function enterInput($name, $value, callable $callback = null)
    {
        $elm = $this->elementByName($name);
        $elm->clear();
        $elm->sendKeys($value);
        $this->attachScreenshot('Input ' . $name);
        $callback and call_user_func($callback, $elm);
        return $this;
    }

    /**
     * Assert that input value is same than expected
     *
     * @param string $name
     * @param string $expectedValue
     * @param callable $callback
     * @return self
     */
    public function assertInput($name, $expectedValue, callable $callback = null)
    {
        $elm = $this->elementByName($name);
        $this->assertSame($expectedValue, $elm->attribute('value'));
        $callback and call_user_func($callback, $elm);
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
     * @param int $delay Seconds
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
