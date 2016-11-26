<?php
/**
 * Webino (http://webino.sk/)
 *
 * @link        https://github.com/webino/WebinoDev/ for the canonical source repository
 * @copyright   Copyright (c) 2014-2016 Webino, s. r. o. (http://webino.sk/)
 * @license     BSD-3-Clause
 */
namespace WebinoDev\Test\Functional;

use \PHPUnit_Framework_MockObject_MockObject as MockObject;
use WebinoDev\Test\Selenium\WebDriver\TestSession;
use WebinoDev\Test\Selenium\WebDriver\TestWebDriver;
use WebinoDev\Test\Selenium\WebDriver\SimpleItem;

/**
 * Trait for selenium tests functional testing
 */
trait SeleniumTestTrait
{
    /**
     * Setup Selenium WebDriver mock with session
     *
     * @return $this
     */
    protected function setUpWebDriver()
    {
        TestWebDriver::$session = $this->getMock(TestSession::class);
        TestWebDriver::$session->expects($this->any())
            ->method('window')
            ->will($this->returnValue(new SimpleItem));

        class_exists('PHPWebDriver_WebDriver', false)
            or class_alias(TestWebDriver::class, 'PHPWebDriver_WebDriver');

        return $this;
    }

    /**
     * Returns Selenium WebDriver session mock
     *
     * @return \PHPWebDriver_WebDriverSession|\WebinoDev\Test\Selenium\WebDriver\SessionInterface|MockObject
     */
    protected function getWebDriverSession()
    {
        return TestWebDriver::$session;
    }
}
