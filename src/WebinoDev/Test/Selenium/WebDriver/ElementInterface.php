<?php
/**
 * Webino (http://webino.sk/)
 *
 * @link        https://github.com/webino/WebinoDev/ for the canonical source repository
 * @copyright   Copyright (c) 2017 Webino, s. r. o. (http://webino.sk/)
 * @license     BSD-3-Clause
 */

namespace WebinoDev\Test\Selenium\WebDriver;

/**
 * Interface ElementInterface
 * @TODO comments
 */
interface ElementInterface
{
    /**
     *
     */
    public function text();

    /**
     * @param string $name
     * @return string
     */
    public function attribute($name);

    /**
     *
     */
    public function click();

    /**
     *
     */
    public function clear();

    /**
     * @param string $keys
     */
    public function sendKeys($keys);

    /**
     *
     */
    public function submit();
}