<?php
/**
 * Webino (http://webino.sk/)
 *
 * @link        https://github.com/webino/WebinoDev/ for the canonical source repository
 * @copyright   Copyright (c) 2018 Webino, s. r. o. (http://webino.sk/)
 * @license     BSD-3-Clause
 */

namespace WebinoDev\Test\Selenium;

/**
 * Trait WindowTrait
 *
 * @property-read object $session
 */
trait WindowTrait
{
    /**
     * Focus a browser window
     *
     * @param int $index
     * @return $this
     */
    protected function focusWindow($index)
    {
        $windows = $this->session->window_handles();
        $this->session->focusWindow($windows[$index]);
        return $this;
    }

    /**
     * Close a browser window
     *
     * @return $this
     */
    protected function closeWindow()
    {
        $this->session->deleteWindow();
        $this->focusWindow(0);
        return $this;
    }
}
