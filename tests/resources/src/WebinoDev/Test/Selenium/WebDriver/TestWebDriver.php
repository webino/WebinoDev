<?php
/**
 * Webino (http://webino.sk/)
 *
 * @link        https://github.com/webino/WebinoDev/ for the canonical source repository
 * @copyright   Copyright (c) 2014 Webino, s. r. o. (http://webino.sk/)
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
     * @var
     */
    public static $session;

    /**
     * Return session mock for test purposes
     *
     * @return
     */
    public function session()
    {
        return $this::$session;
    }
}
