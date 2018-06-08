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
 * Trait ClickTrait
 */
trait ClickTrait
{
    /**
     * Clicks on a link
     *
     * @param string $linkText
     * @param callable $callback
     * @param float $sleep
     * @return $this
     */
    protected function clickLink($linkText, callable $callback = null, $sleep = 2.0)
    {
        $elm = $this->elementByLinkText($linkText);
        $elm->click();
        $callback and call_user_func($callback, $elm);
        $this->sleep($sleep);
        return $this;
    }

    /**
     * Clicks on ajax-link
     *
     * @param string $linkText
     * @param callable $callback
     * @return $this
     */
    protected function clickAjaxLink($linkText, callable $callback = null)
    {
        $this->clickLink($linkText, $callback, 0);
        $this->waitForAjax();
        return $this;
    }

    /**
     * @param string $class
     * @return $this
     */
    protected function clickByClass($class)
    {
        $this->elementByClassName($class)->click();
        return $this;
    }

    /**
     * @param string $name
     * @param string $value
     * @return $this
     * @deprecated use getSelect()
     */
    protected function clickSelect($name, $value)
    {
        $selector = sprintf('select[name="%s"] option[value="%s"]', $name, $value);
        $this->elementByCssSelector($selector)->click();
        return $this;
    }
}
