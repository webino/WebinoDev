<?php
/**
 * Webino (http://webino.sk/)
 *
 * @link        https://github.com/webino/WebinoDev/ for the canonical source repository
 * @copyright   Copyright (c) 2012-2019 Webino, s. r. o. (http://webino.sk/)
 * @license     BSD-3-Clause
 */

namespace WebinoDev\Test\Selenium\WebDriver;

/**
 * Interface ElementInterface
 */
interface ElementInterface
{
    /**
     * @return string
     */
    public function text();

    /**
     * @param string $name
     * @return string
     */
    public function attribute($name);

    /**
     * @return void
     */
    public function click();

    /**
     * @return void
     */
    public function clear();

    /**
     * @param string $keys
     */
    public function sendKeys($keys);

    /**
     * @return void
     */
    public function submit();

    /**
     * @return bool
     */
    public function displayed();
}
