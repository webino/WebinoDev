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
 * Interface SessionInterface
 * @TODO comments
 */
interface SessionInterface
{
    /**
     * @param string $url
     * @return string
     */
    public function open($url);

    /**
     * @return string
     */
    public function url();

    /**
     * @return string
     */
    public function title();

    /**
     * @return WindowInterface
     */
    public function window();

    /**
     * @return string
     */
    public function source();

    /**
     * @return string
     */
    public function screenshot();

    /**
     * @param array $args
     */
    public function execute(array $args);
}
