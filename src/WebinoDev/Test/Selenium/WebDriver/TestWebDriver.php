<?php
/**
 * Webino (http://webino.sk/)
 *
 * @link        https://github.com/webino/WebinoDev/ for the canonical source repository
 * @copyright   Copyright (c) 2014-2016 Webino, s. r. o. (http://webino.sk/)
 * @license     BSD-3-Clause
 */

namespace WebinoDev\Test\Selenium\WebDriver;

/**
 * For mocking PHPWebDriver_WebDriver
 */
class TestWebDriver
{
    /**
     * Session mock
     *
     * @var \PHPWebDriver_WebDriverSession|SessionInterface|\PHPUnit_Framework_MockObject_MockObject
     */
    public static $session;

    /**
     * Return session mock for test purposes
     *
     * @return \PHPWebDriver_WebDriverSession|SessionInterface|\PHPUnit_Framework_MockObject_MockObject
     */
    public function session()
    {
        return $this::$session;
    }
}
