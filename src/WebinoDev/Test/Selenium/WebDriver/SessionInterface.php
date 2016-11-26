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
 * Interface SessionInterface
 * @TODO comments
 */
interface SessionInterface
{
    /**
     *
     */
    public function url();

    /**
     *
     */
    public function title();

    /**
     *
     */
    public function source();

    /**
     * @param array $args
     */
    public function execute(array $args);
}
