<?php
/**
 * Webino (http://webino.sk/)
 *
 * @link        https://github.com/webino/WebinoDev/ for the canonical source repository
 * @copyright   Copyright (c) 2014 Webino, s. r. o. (http://webino.sk/)
 * @license     BSD-3-Clause
 */

namespace WebinoDev\Test\Selenium;

use PHPWebDriver_WebDriverBy as By;

/**
 * WebDriver tests elements helper methods trait
 */
trait ElementsTrait
{
    /**
     * Returns WebDriver session
     *
     * @return \PHPWebDriver_WebDriverSession
     */
    abstract protected function getSession();

    /**
     * Returns page elements by class name
     *
     * @param string $className
     * @return \PHPWebDriver_WebDriverElement[]
     */
    protected function elementsByClassName($className)
    {
        return $this->getSession()->elements(By::CLASS_NAME, $className);
    }

    /**
     * Returns page elements by CSS selector
     *
     * @param string $selector
     * @return \PHPWebDriver_WebDriverElement[]
     */
    protected function elementsByCssSelector($selector)
    {
        return $this->getSession()->elements(By::CSS_SELECTOR, $selector);
    }

    /**
     * Returns page elements by ID
     *
     * @param string $id
     * @return \PHPWebDriver_WebDriverElement[]
     */
    protected function elementsById($id)
    {
        return $this->getSession()->elements(By::ID, $id);
    }

    /**
     * Returns page elements by link text
     *
     * @param string $text
     * @return \PHPWebDriver_WebDriverElement[]
     */
    protected function elementsByLinkText($text)
    {
        return $this->getSession()->elements(By::LINK_TEXT, $text);
    }

    /**
     * Returns page elements by its name
     *
     * @param string $name
     * @return \PHPWebDriver_WebDriverElement[]
     */
    protected function elementsByName($name)
    {
        return $this->getSession()->elements(By::NAME, $name);
    }

    /**
     * Returns page elements by its name
     *
     * @param string $name
     * @return \PHPWebDriver_WebDriverElement[]
     */
    protected function elementsByPartialLinkText($name)
    {
        return $this->getSession()->elements(By::PARTIAL_LINK_TEXT, $name);
    }

    /**
     * Returns page elements by its tag name
     *
     * @param string $tag
     * @return \PHPWebDriver_WebDriverElement[]
     */
    protected function elementsByTagName($tag)
    {
        return $this->getSession()->elements(By::TAG_NAME, $tag);
    }

    /**
     * Returns page elements by XPath
     *
     * @param string $xpath
     * @return \PHPWebDriver_WebDriverElement[]
     */
    protected function elementsByXpath($xpath)
    {
        return $this->getSession()->elements(By::XPATH, $xpath);
    }
}
