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
use WebinoDev\Test\Functional\SeleniumTestTrait;
use WebinoDev\Test\Selenium\WebDriver\TestElement;
use Yandex\Allure\Adapter\Annotation\Features;
use Yandex\Allure\Adapter\Annotation\Title;

/**
 * @Title("Trait for elements helper methods works")
 * @Features({"Selenium testing"})
 */
class ElementsTraitTest extends ElementsTestCase
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
        $this->object = new ElementsTestCase;
    }

    /**
     * @Title("Elements by class name works")
     * @covers WebinoDev\Test\Selenium\ElementsTrait::elementsByClassName
     */
    public function testElementsByClassName()
    {
        $className = 'test-class-name';
        $expected  = [new TestElement];
        $session   = $this->getWebDriverSession();

        $session->expects($this->once())
            ->method('elements')
            ->with(By::CLASS_NAME, $className)
            ->will($this->returnValue($expected));

        $this->object->session = $session;
        $elms = $this->object->elementsByClassName($className);
        $this->assertSame($expected, $elms);
    }

    /**
     * @Title("Elements by CSS selector")
     * @covers WebinoDev\Test\Selenium\ElementsTrait::elementsByCssSelector
     */
    public function testElementsByCssSelector()
    {
        $className = '.test-css-selector';
        $expected  = [new TestElement];
        $session   = $this->getWebDriverSession();

        $session->expects($this->once())
            ->method('elements')
            ->with(By::CSS_SELECTOR, $className)
            ->will($this->returnValue($expected));

        $this->object->session = $session;
        $elms = $this->object->elementsByCssSelector($className);
        $this->assertSame($expected, $elms);
    }

    /**
     * @Title("Elements by ID")
     * @covers WebinoDev\Test\Selenium\ElementsTrait::elementsById
     */
    public function testElementsById()
    {
        $className = 'test-id';
        $expected  = [new TestElement];
        $session   = $this->getWebDriverSession();

        $session->expects($this->once())
            ->method('elements')
            ->with(By::ID, $className)
            ->will($this->returnValue($expected));

        $this->object->session = $session;
        $elms = $this->object->elementsById($className);
        $this->assertSame($expected, $elms);
    }

    /**
     * @Title("Elements by link text")
     * @covers WebinoDev\Test\Selenium\ElementsTrait::elementsByLinkText
     */
    public function testElementsByLinkText()
    {
        $className = 'Test link';
        $expected  = [new TestElement];
        $session   = $this->getWebDriverSession();

        $session->expects($this->once())
            ->method('elements')
            ->with(By::LINK_TEXT, $className)
            ->will($this->returnValue($expected));

        $this->object->session = $session;
        $elms = $this->object->elementsByLinkText($className);
        $this->assertSame($expected, $elms);
    }

    /**
     * @Title("Elements by name")
     * @covers WebinoDev\Test\Selenium\ElementsTrait::elementsByName
     */
    public function testElementsByName()
    {
        $className = 'Test link';
        $expected  = [new TestElement];
        $session   = $this->getWebDriverSession();

        $session->expects($this->once())
            ->method('elements')
            ->with(By::NAME, $className)
            ->will($this->returnValue($expected));

        $this->object->session = $session;
        $elms = $this->object->elementsByName($className);
        $this->assertSame($expected, $elms);
    }

    /**
     * @Title("Elements by partial link text")
     * @covers WebinoDev\Test\Selenium\ElementsTrait::elementsByPartialLinkText
     */
    public function testElementsByPartialLinkText()
    {
        $className = 'Test link too long';
        $expected  = [new TestElement];
        $session   = $this->getWebDriverSession();

        $session->expects($this->once())
            ->method('elements')
            ->with(By::PARTIAL_LINK_TEXT, $className)
            ->will($this->returnValue($expected));

        $this->object->session = $session;
        $elms = $this->object->elementsByPartialLinkText($className);
        $this->assertSame($expected, $elms);
    }

    /**
     * @Title("Elements by tag name")
     * @covers WebinoDev\Test\Selenium\ElementsTrait::elementsByTagName
     */
    public function testElementsByTagName()
    {
        $className = 'testtag';
        $expected  = [new TestElement];
        $session   = $this->getWebDriverSession();

        $session->expects($this->once())
            ->method('elements')
            ->with(By::TAG_NAME, $className)
            ->will($this->returnValue($expected));

        $this->object->session = $session;
        $elms = $this->object->elementsByTagName($className);
        $this->assertSame($expected, $elms);
    }

    /**
     * @Title("Elements by XPath")
     * @covers WebinoDev\Test\Selenium\ElementsTrait::elementsByXpath
     */
    public function testElementsByXpath()
    {
        $className = '//test/xpath';
        $expected  = [new TestElement];
        $session   = $this->getWebDriverSession();

        $session->expects($this->once())
            ->method('elements')
            ->with(By::XPATH, $className)
            ->will($this->returnValue($expected));

        $this->object->session = $session;
        $elms = $this->object->elementsByXpath($className);
        $this->assertSame($expected, $elms);
    }
}
