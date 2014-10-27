<?php
/**
 * Webino (http://webino.sk/)
 *
 * @link        https://github.com/webino/WebinoDev/ for the canonical source repository
 * @copyright   Copyright (c) 2014 Webino, s. r. o. (http://webino.sk/)
 * @license     BSD-3-Clause
 */
namespace WebinoDev\Test\Functional;

use WebinoDev\Test\Selenium\WebDriver;

/**
 * Trait for selenium tests functional testing
 */
trait SeleniumTestTrait
{
    /**
     * Setup Selenium WebDriver mock with session
     *
     * @return self
     */
    protected function setUpWebDriver()
    {
        WebDriver\TestWebDriver::$session = $this->getMock('WebinoDev\Test\Selenium\WebDriver\TestSession');

        class_exists('PHPWebDriver_WebDriver', false) or
            class_alias('WebinoDev\Test\Selenium\WebDriver\TestWebDriver', 'PHPWebDriver_WebDriver');

        return $this;
    }

    /**
     * Returns Selenium WebDriver session mock
     *
     * @return PHPWebDriver_Session
     */
    protected function getWebDriverSession()
    {
        return WebDriver\TestWebDriver::$session;
    }
}
