<?php
/**
 * Webino (http://webino.sk/)
 *
 * @link        https://github.com/webino/WebinoDev/ for the canonical source repository
 * @copyright   Copyright (c) 2018 Webino, s. r. o. (http://webino.sk/)
 * @license     BSD-3-Clause
 */

namespace WebinoDev\Test\Selenium;

use PHPWebDriver_WebDriverWait as Wait;

/**
 * Trait WaitTrait
 *
 * @property-read object $session
 */
trait WaitTrait
{
    /**
     * @param float $sec
     * @return $this
     */
    protected function sleep($sec = 2.0)
    {
        $sec && sleep($sec);
        return $this;
    }

    /**
     * Wait for something, then do something else
     *
     * @param callable|object $action
     * @param callable|object $callback
     * @return $this
     */
    protected function waitFor(callable $action, callable $callback = null)
    {
        try {
            $elm = (new Wait($this->session))->until($action);
            $callback and call_user_func($callback, $elm);
        } catch (\Throwable $exc) {
            $this->fail($exc->getMessage());
        }

        return $this;
    }

    /**
     * Ajax wait
     *
     * Depends on jQuery.
     *
     * @param float $delay Seconds
     * @return $this
     */
    protected function waitForAjax($delay = .1)
    {
        try {
            // delay slightly more than required
            $delay and usleep($delay * 1100000);

            $this->waitFor(function () {
                return $this->session->execute(['script' => 'return !jQuery.active', 'args' => []]);
            });
        } catch (\Throwable $exc) {
            $this->fail($exc->getMessage());
        }

        return $this;
    }
}
