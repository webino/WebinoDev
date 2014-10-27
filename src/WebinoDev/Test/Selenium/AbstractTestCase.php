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
use PHPWebDriver_WebDriverBy as By;
use PHPWebDriver_WebDriverWait as Wait;
use RuntimeException;

/**
 * Base test case for Selenium WebDriver tests
 */
abstract class AbstractTestCase extends \PHPUnit_Framework_TestCase
{
    /**
     * Selenium Web Driver Host URI
     */
    const WEB_DRIVER_HOST = 'http://localhost:4444/wd/hub';

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
        $this->webDriver = new PHPWebDriver_WebDriver(self::WEB_DRIVER_HOST);
        $this->session   = $this->webDriver->session($this::$browser);
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
     * Assert that page is without errors
     */
    protected function assertNotError()
    {
        $this->assertNotContains('Error', $this->session->title());
        $src = $this->session->source();
        $this->assertNotContains('Error', $src);
        $this->assertNotContains('Exception', $src);
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
        $elm = $this->session->element(By::LINK_TEXT, $linkText);
        $elm->click();
        !$callback or call_user_func($callback, $elm);
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
        $elm = $this->session->element(By::NAME, $name);
        $elm->sendKeys($value);
        !$callback or call_user_func($callback, $elm);
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
        !$callback or call_user_func($callback, $elm);
        return $this;
    }

    /**
     * Ajax wait
     *
     * Depends on jQuery.
     *
     * @return self
     */
    protected function waitForAjax()
    {
        do {
            sleep(2);
        } while ($this->session->execute(['script' => 'return jQuery.active', 'args' => []]));
        return $this;
    }
}
