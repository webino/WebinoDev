<?php
/**
 * Webino (http://webino.sk/)
 *
 * @link        https://github.com/webino/WebinoDev/ for the canonical source repository
 * @copyright   Copyright (c) 2018 Webino, s. r. o. (http://webino.sk/)
 * @license     BSD-3-Clause
 */

namespace WebinoDev\Test\Selenium;

use PHPWebDriver_WebDriverElement as WebDriverElement;

/**
 * Trait InputTrait
 */
trait InputTrait
{
    /**
     * Return select input object
     *
     * @param string $name
     * @return WebDriver\Select
     */
    protected function getSelectInput($name)
    {
        return new WebDriver\Select($this->elementByName($name));
    }

    /**
     * @param string $name
     * @return WebDriver\Select
     * @deprecated use getSelectInput() instead
     * @todo remove, deprecated
     */
    protected function getSelect($name)
    {
        return $this->getSelectInput($name);
    }

    /**
     * Enters the input value
     *
     * @param string|WebDriverElement $name
     * @param string $value
     * @param callable|false|null $callback
     * @return $this
     */
    protected function enterInput($name, $value, $callback = null)
    {
        $resolveElm = function () use ($name) {
            if ($name instanceof WebDriver\ElementInterface
                || $name instanceof WebDriverElement
            ) {
                return $name;
            }
            return $this->elementByName($name);
        };

        /** @var WebDriverElement|WebDriver\ElementInterface $elm */
        $elm = $resolveElm();
        if (null === $callback) {
            $this->sleep(1);
            $elm->clear();
            $elm->sendKeys('');
            $this->sleep(1);
        }
        $elm->clear();
        $elm->sendKeys($value);
        is_callable($callback) and call_user_func($callback, $elm);
        return $this;
    }

    /**
     * Submit the input value
     *
     * @param string|WebDriverElement $name
     * @param string $value
     * @return $this
     */
    protected function submitInput($name, $value)
    {
        $this->enterInput($name, $value, function ($elm) {
            /** @var $elm WebDriver\ElementInterface */
            $elm->submit();
        });
        return $this;
    }

    /**
     * Assert that input value is same than expected
     *
     * @param string|WebDriverElement|WebDriver\ElementInterface $name
     * @param string $expectedValue
     * @param callable $callback
     * @return $this
     */
    public function assertInput($name, $expectedValue, callable $callback = null)
    {
        $elm = ($name instanceof WebDriverElement) ? $name : $this->elementByName($name);
        $this->assertSame($expectedValue, $elm->attribute('value'));
        $callback and call_user_func($callback, $elm);
        return $this;
    }
}
