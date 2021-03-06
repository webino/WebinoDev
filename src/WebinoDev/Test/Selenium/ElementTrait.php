<?php
/**
 * Webino (http://webino.sk/)
 *
 * @link        https://github.com/webino/WebinoDev/ for the canonical source repository
 * @copyright   Copyright (c) 2014-2017 Webino, s. r. o. (http://webino.sk/)
 * @license     BSD-3-Clause
 */

namespace WebinoDev\Test\Selenium;

use PHPWebDriver_WebDriverBy as By;

/**
 * WebDriver tests element helper methods trait
 */
trait ElementTrait
{
    /**
     * Returns WebDriver session
     *
     * @return \PHPWebDriver_WebDriverSession
     */
    abstract protected function getSession();

    /**
     * Returns page element by class name
     *
     * @param string $className
     * @return \PHPWebDriver_WebDriverElement|WebDriver\ElementInterface
     */
    protected function elementByClassName($className)
    {
        return $this->getSession()->element(By::CLASS_NAME, $className);
    }

    /**
     * Returns page element by CSS selector
     *
     * @param string $selector
     * @return \PHPWebDriver_WebDriverElement|WebDriver\ElementInterface
     */
    protected function elementByCssSelector($selector)
    {
        return $this->getSession()->element(By::CSS_SELECTOR, $selector);
    }

    /**
     * Returns page element by ID
     *
     * @param string $id
     * @return \PHPWebDriver_WebDriverElement|WebDriver\ElementInterface
     */
    protected function elementById($id)
    {
        return $this->getSession()->element(By::ID, $id);
    }

    /**
     * Returns page element by link text
     *
     * @param string $text
     * @return \PHPWebDriver_WebDriverElement|WebDriver\ElementInterface
     */
    protected function elementByLinkText($text)
    {
        return $this->getSession()->element(By::LINK_TEXT, $text);
    }

    /**
     * Returns page element by its name
     *
     * @param string $name
     * @return \PHPWebDriver_WebDriverElement|WebDriver\ElementInterface
     */
    protected function elementByName($name)
    {
        return $this->getSession()->element(By::NAME, $name);
    }

    /**
     * Returns page element by partial link text
     *
     * @param string $name
     * @return \PHPWebDriver_WebDriverElement|WebDriver\ElementInterface
     */
    protected function elementByPartialLinkText($name)
    {
        return $this->getSession()->element(By::PARTIAL_LINK_TEXT, $name);
    }

    /**
     * Returns page element by its tag name
     *
     * @param string $tag
     * @return \PHPWebDriver_WebDriverElement|WebDriver\ElementInterface
     */
    protected function elementByTagName($tag)
    {
        return $this->getSession()->element(By::TAG_NAME, $tag);
    }

    /**
     * Returns page element by XPath
     *
     * @param string $xpath
     * @return \PHPWebDriver_WebDriverElement|WebDriver\ElementInterface
     */
    protected function elementByXpath($xpath)
    {
        return $this->getSession()->element(By::XPATH, $xpath);
    }
}
