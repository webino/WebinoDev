<?php
/**
 * Webino (http://webino.sk/)
 *
 * @link        https://github.com/webino/WebinoDev/ for the canonical source repository
 * @copyright   Copyright (c) 2014 Webino, s. r. o. (http://webino.sk/)
 * @license     BSD-3-Clause
 */

namespace WebinoDev\Test\Selenium;

use WebinoDev\Test\Functional\SeleniumTestTrait;
use Yandex\Allure\Adapter\Annotation\Features;
use Yandex\Allure\Adapter\Annotation\Title;

/**
 * @Title("Abstract class for selenium tests works")
 * @Features({"Selenium testing"})
 */
class AbstractTestCaseTest extends AbstractTestCase
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
        $this->object = new TestCase;
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
        putenv('URI');
    }

    /**
     * @Title("Setup Selenium WebDriver")
     * @covers WebinoDev\Test\Selenium\AbstractTestCase::setUp
     */
    public function testSetUp()
    {
        putenv('URI=test-uri-' . __METHOD__);
        $this->object->setUp();
        $this->assertInstanceOf('WebinoDev\Test\Selenium\WebDriver\TestWebDriver', $this->object->webDriver);
        $this->assertInstanceOf('WebinoDev\Test\Selenium\WebDriver\TestSession', $this->object->session);
        $this->assertSame($this->getWebDriverSession(), $this->object->session);
    }

    /**
     * @Title("Tear down Selenium WebDriver")
     * @covers WebinoDev\Test\Selenium\AbstractTestCase::tearDown
     */
    public function testTearDown()
    {
        $this->getWebDriverSession()->expects($this->once())
            ->method('close');

        putenv('URI=test-uri-' . __METHOD__);
        $this->object->setUp();
        $this->object->tearDown();
    }

    /**
     * @Title("Get the URI fron env vars")
     * @covers WebinoDev\Test\Selenium\AbstractTestCase::resolveUri
     */
    public function testResolveUri()
    {
        $expected = 'test-uri-' . __METHOD__;
        putenv('URI=' . $expected);
        $uri = $this->object->resolveUri();
        $this->assertSame($expected, $uri);
    }

    /**
     * @Title("URI env var is required")
     * @covers WebinoDev\Test\Selenium\AbstractTestCase::resolveUri
     * @expectedException RuntimeException
     */
    public function testResolveUriExpectsUriEnv()
    {
        $this->object->setUp();
    }

    /**
     * @Title("Assertion for page error works")
     * @covers WebinoDev\Test\Selenium\AbstractTestCase::assertNotError
     */
    public function testAssertNotError()
    {
        $this->getWebDriverSession()->expects($this->once())
            ->method('title')
            ->will($this->returnValue(''));

        $this->getWebDriverSession()->expects($this->once())
            ->method('source')
            ->will($this->returnValue(''));

        putenv('URI=test-uri-' . __METHOD__);
        $this->object->setUp();
        $this->object->assertNotError();
    }

    /**
     * @Title("Assertion for page error fails")
     * @covers WebinoDev\Test\Selenium\AbstractTestCase::assertNotError
     * @expectedException PHPUnit_Framework_ExpectationFailedException
     */
    public function testAssertNotErrorScream()
    {
        $this->getWebDriverSession()->expects($this->once())
            ->method('title')
            ->will($this->returnValue('Error'));

        putenv('URI=test-uri-' . __METHOD__);
        $this->object->setUp();
        $this->object->assertNotError();
    }

    /**
     * @Title("Clicking a link works")
     * @covers WebinoDev\Test\Selenium\AbstractTestCase::clickLink
     */
    public function testClickLink()
    {
        $linkText = 'Link example';
        $element  = $this->getMock('WebinoDev\Test\Selenium\WebDriver\TestElement');

        $this->getWebDriverSession()->expects($this->once())
            ->method('element')
            ->with('link text', $linkText)
            ->will($this->returnValue($element));

        $element->expects($this->once())
            ->method('click');

        $this->object->session = $this->getWebDriverSession();
        $this->object->clickLink($linkText);
    }

    /**
     * @Title("Sending keys to input")
     * @covers WebinoDev\Test\Selenium\AbstractTestCase::enterInput
     */
    public function testEnterInput()
    {
        $name  = 'test_name';
        $value = 'test_value';
        $elm   = $this->getMock('WebinoDev\Test\Selenium\WebDriver\TestElement');

        $this->getWebDriverSession()->expects($this->once())
            ->method('element')
            ->with('name', $name)
            ->will($this->returnValue($elm));

        $elm->expects($this->once())
            ->method('clear');

        $elm->expects($this->once())
            ->method('sendKeys')
            ->with($value);

        $this->object->session = $this->getWebDriverSession();
        $this->object->enterInput($name, $value);
    }

    /**
     * @Title("Sending keys to input with callback")
     * @covers WebinoDev\Test\Selenium\AbstractTestCase::enterInput
     */
    public function testEnterInputWithCallback()
    {
        $name  = 'test_name';
        $value = 'test_value';
        $elm   = $this->getMock('WebinoDev\Test\Selenium\WebDriver\TestElement');

        $this->getWebDriverSession()->expects($this->once())
            ->method('element')
            ->with('name', $name)
            ->will($this->returnValue($elm));

        $elm->expects($this->once())
            ->method('clear');

        $elm->expects($this->once())
            ->method('sendKeys')
            ->with($value);

        $callback = $this->getMock('WebinoDev\Test\Selenium\TestCallback');
        $callback->expects($this->once())
            ->method('__invoke')
            ->with($elm);

        $this->object->session = $this->getWebDriverSession();
        $this->object->enterInput($name, $value, $callback);
    }

    /**
     * @Title("Asserting input value")
     * @covers WebinoDev\Test\Selenium\AbstractTestCase::assertInput
     */
    public function testAssertInput()
    {
        $name  = 'test_name';
        $value = 'test_value';
        $elm   = $this->getMock('WebinoDev\Test\Selenium\WebDriver\TestElement');

        $this->getWebDriverSession()->expects($this->once())
            ->method('element')
            ->with('name', $name)
            ->will($this->returnValue($elm));

        $elm->expects($this->once())
            ->method('attribute')
            ->with('value')
            ->will($this->returnValue($value));

        $this->object->session = $this->getWebDriverSession();
        $this->object->assertInput($name, $value);
    }

    /**
     * @Title("Asserting input value")
     * @covers WebinoDev\Test\Selenium\AbstractTestCase::assertInput
     */
    public function testAssertInputWithCallback()
    {
        $name  = 'test_name';
        $value = 'test_value';
        $elm   = $this->getMock('WebinoDev\Test\Selenium\WebDriver\TestElement');

        $this->getWebDriverSession()->expects($this->once())
            ->method('element')
            ->with('name', $name)
            ->will($this->returnValue($elm));

        $elm->expects($this->once())
            ->method('attribute')
            ->with('value')
            ->will($this->returnValue($value));

        $callback = $this->getMock('WebinoDev\Test\Selenium\TestCallback');
        $callback->expects($this->once())
            ->method('__invoke')
            ->with($elm);

        $this->object->session = $this->getWebDriverSession();
        $this->object->assertInput($name, $value, $callback);
    }

    /**
     * @Title("Wait for works")
     * @covers WebinoDev\Test\Selenium\AbstractTestCase::waitFor
     */
    public function testWaitFor()
    {
        $action = $this->getMock('WebinoDev\Test\Selenium\TestCallback');
        $action->expects($this->once())
            ->method('__invoke')
            ->will($this->returnValue(true));

        $this->object->waitFor($action);
    }

    /**
     * @Title("Wait for with callback works")
     * @covers WebinoDev\Test\Selenium\AbstractTestCase::waitFor
     */
    public function testWaitForWithCallback()
    {
        $elm = $this->getMock('WebinoDev\Test\Selenium\WebDriver\TestElement');

        $action = $this->getMock('WebinoDev\Test\Selenium\TestCallback');
        $action->expects($this->once())
            ->method('__invoke')
            ->will($this->returnValue($elm));

        $callback = $this->getMock('WebinoDev\Test\Selenium\TestCallback');
        $callback->expects($this->once())
            ->method('__invoke')
            ->with($elm);

        $this->object->waitFor($action, $callback);
    }

    /**
     * @Title("Wait for ajax works")
     * @covers WebinoDev\Test\Selenium\AbstractTestCase::waitForAjax
     */
    public function testWaitForAjax()
    {
        $this->getWebDriverSession()->expects($this->once())
            ->method('execute');

        $this->object->session = $this->getWebDriverSession();
        $this->object->waitForAjax();
    }
}
