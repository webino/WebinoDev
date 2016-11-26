<?php
/**
 * Webino (http://webino.sk/)
 *
 * @link        https://github.com/webino/WebinoDev/ for the canonical source repository
 * @copyright   Copyright (c) 2016 Webino, s. r. o. (http://webino.sk/)
 * @license     BSD-3-Clause
 */

namespace WebinoDev\Test\Selenium\WebDriver;

/**
 * For mocking PHPWebDriver_WebDriverSession window
 */
class TestWindow implements WindowInterface
{
    /**
     * {@inheritDoc}
     */
    public function postSize(array $size)
    {
    }
}
