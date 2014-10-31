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
use WebinoDev\Test\Functional\SeleniumTestTrait;
use WebinoDev\Test\Selenium\WebDriver\TestElement;
use Yandex\Allure\Adapter\Annotation\Features;
use Yandex\Allure\Adapter\Annotation\Title;

/**
 * @Title("Trait for element helper methods works")
 * @Features({"Selenium testing"})
 */
class ElementTraitTest extends ElementTestCase
{
    use SeleniumTestTrait;

    /**
     * @var AbstractTestCase
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->setUpWebDriver();
        $this->object = new ElementTestCase;
    }

    /**
     * @Title("Element by class name works")
     * @covers WebinoDev\Test\Selenium\ElementTrait::elementByClassName
     */
    public function testElementByClassName()
    {
        $className = 'test-class-name';
        $expected  = new TestElement;
        $session   = $this->getWebDriverSession();

        $session->expects($this->once())
            ->method('element')
            ->with(By::CLASS_NAME, $className)
            ->will($this->returnValue($expected));

        $this->object->session = $session;
        $elm = $this->object->elementByClassName($className);
        $this->assertSame($expected, $elm);
    }

    /**
     * @Title("Element by CSS selector")
     * @covers WebinoDev\Test\Selenium\ElementTrait::elementByCssSelector
     */
    public function testElementByCssSelector()
    {
        $className = '.test-css-selector';
        $expected  = new TestElement;
        $session   = $this->getWebDriverSession();

        $session->expects($this->once())
            ->method('element')
            ->with(By::CSS_SELECTOR, $className)
            ->will($this->returnValue($expected));

        $this->object->session = $session;
        $elm = $this->object->elementByCssSelector($className);
        $this->assertSame($expected, $elm);
    }

    /**
     * @Title("Element by ID")
     * @covers WebinoDev\Test\Selenium\ElementTrait::elementById
     */
    public function testElementById()
    {
        $className = 'test-id';
        $expected  = new TestElement;
        $session   = $this->getWebDriverSession();

        $session->expects($this->once())
            ->method('element')
            ->with(By::ID, $className)
            ->will($this->returnValue($expected));

        $this->object->session = $session;
        $elm = $this->object->elementById($className);
        $this->assertSame($expected, $elm);
    }

    /**
     * @Title("Element by link text")
     * @covers WebinoDev\Test\Selenium\ElementTrait::elementByLinkText
     */
    public function testElementByLinkText()
    {
        $className = 'Test link';
        $expected  = new TestElement;
        $session   = $this->getWebDriverSession();

        $session->expects($this->once())
            ->method('element')
            ->with(By::LINK_TEXT, $className)
            ->will($this->returnValue($expected));

        $this->object->session = $session;
        $elm = $this->object->elementByLinkText($className);
        $this->assertSame($expected, $elm);
    }

    /**
     * @Title("Element by name")
     * @covers WebinoDev\Test\Selenium\ElementTrait::elementByName
     */
    public function testElementByName()
    {
        $className = 'Test link';
        $expected  = new TestElement;
        $session   = $this->getWebDriverSession();

        $session->expects($this->once())
            ->method('element')
            ->with(By::NAME, $className)
            ->will($this->returnValue($expected));

        $this->object->session = $session;
        $elm = $this->object->elementByName($className);
        $this->assertSame($expected, $elm);
    }

    /**
     * @Title("Element by partial link text")
     * @covers WebinoDev\Test\Selenium\ElementTrait::elementByPartialLinkText
     */
    public function testElementByPartialLinkText()
    {
        $className = 'Test link too long';
        $expected  = new TestElement;
        $session   = $this->getWebDriverSession();

        $session->expects($this->once())
            ->method('element')
            ->with(By::PARTIAL_LINK_TEXT, $className)
            ->will($this->returnValue($expected));

        $this->object->session = $session;
        $elm = $this->object->elementByPartialLinkText($className);
        $this->assertSame($expected, $elm);
    }

    /**
     * @Title("Element by tag name")
     * @covers WebinoDev\Test\Selenium\ElementTrait::elementByTagName
     */
    public function testElementByTagName()
    {
        $className = 'testtag';
        $expected  = new TestElement;
        $session   = $this->getWebDriverSession();

        $session->expects($this->once())
            ->method('element')
            ->with(By::TAG_NAME, $className)
            ->will($this->returnValue($expected));

        $this->object->session = $session;
        $elm = $this->object->elementByTagName($className);
        $this->assertSame($expected, $elm);
    }

    /**
     * @Title("Element by XPath")
     * @covers WebinoDev\Test\Selenium\ElementTrait::elementByXpath
     */
    public function testElementByXpath()
    {
        $className = '//test/xpath';
        $expected  = new TestElement;
        $session   = $this->getWebDriverSession();

        $session->expects($this->once())
            ->method('element')
            ->with(By::XPATH, $className)
            ->will($this->returnValue($expected));

        $this->object->session = $session;
        $elm = $this->object->elementByXpath($className);
        $this->assertSame($expected, $elm);
    }
}
