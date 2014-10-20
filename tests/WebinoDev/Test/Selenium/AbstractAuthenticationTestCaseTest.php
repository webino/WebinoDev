<?php
/**
 * Webino (http://webino.sk/)
 *
 * @link        https://github.com/webino/WebinoDev/ for the canonical source repository
 * @copyright   Copyright (c) 2014 Webino, s. r. o. (http://webino.sk/)
 * @license     BSD-3-Clause
 */

namespace WebinoDev\Test\Selenium;

use Yandex\Allure\Adapter\Annotation\Features;
use Yandex\Allure\Adapter\Annotation\Title;

/**
 * @Title("Test that abstract class for selenium authentication tests is working as expected")
 * @Features({"Selenium testing"})
 */
class AbstractAuthenticationTestCaseTest extends AbstractAuthenticationTestCase
{
    /**
     * @var AbstractAuthenticationTestCase
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        WebDriver\TestWebDriver::$session = $this->getMock('WebinoDev\Test\Selenium\WebDriver\TestSession');

        class_exists('PHPWebDriver_WebDriver', false) or
            class_alias('WebinoDev\Test\Selenium\WebDriver\TestWebDriver', 'PHPWebDriver_WebDriver');

        $this->object = new AuthenticationTestCase;
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
        putenv('IDENTITY');
        putenv('CREDENTIAL');
    }

    /**
     * @Title("Test that we can get the identity from env vars")
     * @covers WebinoDev\Test\Selenium\AbstractAuthenticationTestCase::getIdentity
     */
    public function testGetIdentity()
    {
        $expected = 'test-identity-' . __METHOD__;
        putenv('IDENTITY=' . $expected);
        $identity = $this->object->getIdentity();
        $this->assertSame($expected, $identity);
    }

    /**
     * @Title("Test that identity env var is required")
     * @covers WebinoDev\Test\Selenium\AbstractAuthenticationTestCase::getIdentity
     * @expectedException RuntimeException
     */
    public function testGetIdentityExpectsIdentityEnv()
    {
        $this->object->getIdentity();
    }

    /**
     * @Title("Test that we get the identity fron env vars just once")
     * @covers WebinoDev\Test\Selenium\AbstractAuthenticationTestCase::getIdentity
     */
    public function testGetIdentityFromEnvOnce()
    {
        $expected = 'test-identity-' . __METHOD__;
        putenv('IDENTITY=' . $expected);
        $identity = $this->object->getIdentity();
        putenv('IDENTITY');
        $this->assertSame($expected, $identity);
    }

    /**
     * @Title("Test that we can get the credential from env vars")
     * @covers WebinoDev\Test\Selenium\AbstractAuthenticationTestCase::getCredential
     */
    public function testGetCredential()
    {
        $expected = 'test-credential-' . __METHOD__;
        putenv('CREDENTIAL=' . $expected);
        $credential = $this->object->getCredential();
        $this->assertSame($expected, $credential);
    }

    /**
     * @Title("Test that credential env var is required")
     * @covers WebinoDev\Test\Selenium\AbstractAuthenticationTestCase::getCredential
     * @expectedException RuntimeException
     */
    public function testGetCredentialExpectsCredentialEnv()
    {
        $this->object->getCredential();
    }

    /**
     * @Title("Test that we get the credential fron env vars just once")
     * @covers WebinoDev\Test\Selenium\AbstractAuthenticationTestCase::getCredential
     */
    public function testGetCredentialFromEnvOnce()
    {
        $expected = 'test-credential-' . __METHOD__;
        putenv('CREDENTIAL=' . $expected);
        $credential = $this->object->getCredential();
        putenv('CREDENTIAL');
        $this->assertSame($expected, $credential);
    }

    /**
     * @Title("Test that we have to call setAuthSuccessLocator() before authentication()")
     * @covers WebinoDev\Test\Selenium\AbstractAuthenticationTestCase::getAuthSuccessLocator
     * @expectedException RuntimeException
     */
    public function testGetAuthSuccessLocatorEmptyThrowsException()
    {
        $this->object->getAuthSuccessLocator();
    }

    /**
     * Setup authentication test prerequisites
     */
    private function prepareAuthenticateTest()
    {
        $identity = 'test-identity-' . __METHOD__;
        putenv('IDENTITY=' . $identity);
        $credential = 'test-credential-' . __METHOD__;
        putenv('CREDENTIAL=' . $credential);

        $identityElm    = $this->getMock('WebinoDev\Test\Selenium\WebDriver\TestElement');
        $credentialElm  = $this->getMock('WebinoDev\Test\Selenium\WebDriver\TestElement');
        $successElm     = $this->getMock('WebinoDev\Test\Selenium\WebDriver\TestElement');
        $successLocator = '.test-success';

        WebDriver\TestWebDriver::$session->expects($this->exactly(5))
            ->method('element')
            ->withConsecutive(
                ['name', 'identity'],
                ['name', 'credential'],
                ['css selector', $successLocator]
            )
            ->will($this->onConsecutiveCalls(
                $this->returnValue($identityElm),
                $this->returnValue($credentialElm),
                $this->returnValue(false),
                $this->returnValue(false),
                $this->returnValue($successElm)
            ));

        $identityElm->expects($this->once())
            ->method('sendKeys')
            ->with($identity);

        $credentialElm->expects($this->once())
            ->method('sendKeys')
            ->with($credential);

        $credentialElm->expects($this->once())
            ->method('submit');

        return [$successLocator, $successElm];
    }

    /**
     * @Title("Test that we can go through authentication")
     */
    public function testAuthenticate()
    {
        $args = $this->prepareAuthenticateTest();

        $this->object->session = WebDriver\TestWebDriver::$session;
        $this->object->setAuthSuccessLocator($args[0]);
        $this->object->authenticate();
    }

    /**
     * @Title("Test that we can go through authentication, than callback is called on success element")
     * @covers WebinoDev\Test\Selenium\AuthenticationTrait::authenticate
     */
    public function testAuthenticateWithCallback()
    {
        $args = $this->prepareAuthenticateTest();

        $callback = $this->getMock('WebinoDev\Test\Selenium\TestCallback');
        $callback->expects($this->once())
            ->method('__invoke')
            ->with($args[1]);

        $this->object->session = WebDriver\TestWebDriver::$session;
        $this->object->setAuthSuccessLocator($args[0]);
        $this->object->authenticate($callback);
    }
}
