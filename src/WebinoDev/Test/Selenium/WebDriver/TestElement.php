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
 * For mocking PHPWebDriver_WebDriverElement
 */
class TestElement implements ElementInterface
{
    /**
     * {@inheritDoc}
     */
    public function text()
    {
    }

    /**
     * {@inheritDoc}
     */
    public function attribute($name)
    {
    }

    /**
     * {@inheritDoc}
     */
    public function click()
    {
    }

    /**
     * {@inheritDoc}
     */
    public function clear()
    {
    }

    /**
     * {@inheritDoc}
     */
    public function sendKeys($keys)
    {
    }

    /**
     * {@inheritDoc}
     */
    public function submit()
    {
    }
}
