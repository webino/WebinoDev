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
     *
     */
    public function attribute();

    /**
     *
     */
    public function click();

    /**
     *
     */
    public function clear();

    /**
     *
     */
    public function sendKeys();

    /**
     *
     */
    public function submit();
}
