<?php
/**
 * Webino (http://webino.sk/)
 *
 * @link        https://github.com/webino/WebinoDev/ for the canonical source repository
 * @copyright   Copyright (c) 2014-2017 Webino, s. r. o. (http://webino.sk/)
 * @license     BSD-3-Clause
 */

namespace WebinoDev\Test\Selenium;

/**
 * Element trait test case
 */
class ElementTestCase extends \PHPUnit_Framework_TestCase
{
    use ElementTrait;

    /**
     * Returns WebDriver session
     *
     * @return \PHPWebDriver_WebDriverSession
     */
    protected function getSession()
    {
        return $this->session;
    }
}
