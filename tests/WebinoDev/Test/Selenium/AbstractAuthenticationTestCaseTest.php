<?php
/**
 * Webino (http://webino.sk/)
 *
 * @link        https://github.com/webino/WebinoDev/ for the canonical source repository
 * @copyright   Copyright (c) 2014-2016 Webino, s. r. o. (http://webino.sk/)
 * @license     BSD-3-Clause
 */

namespace WebinoDev\Test\Selenium;

use WebinoDev\Test\Functional\SeleniumTestTrait;
use Yandex\Allure\Adapter\Annotation\Features;
use Yandex\Allure\Adapter\Annotation\Title;

/**
 * @Title("Abstract class for selenium authentication tests works")
 * @Features({"Selenium testing"})
 */
class AbstractAuthenticationTestCaseTest extends AbstractAuthenticationTestCase
{
    use SeleniumTestTrait;

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
        $this->setUpWebDriver();
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
     * @Title("Get the identity from env vars")
     * @covers WebinoDev\Test\Selenium\AuthenticationTrait::getIdentity
     */
    public function testGetIdentity()
    {
        $expected = 'test-identity-' . __METHOD__;
        putenv('IDENTITY=' . $expected);
        $identity = $this->object->getIdentity();
        $this->assertSame($expected, $identity);
    }

    /**
     * @Title("Identity env var is required")
     * @covers WebinoDev\Test\Selenium\AuthenticationTrait::getIdentity
     * @expectedException \RuntimeException
     */
    public function testGetIdentityExpectsIdentityEnv()
    {
        $this->object->getIdentity();
    }

    /**
     * @Title("Get the identity fron env vars just once")
     * @covers WebinoDev\Test\Selenium\AuthenticationTrait::getIdentity
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
     * @Title("Get the credential from env vars")
     * @covers WebinoDev\Test\Selenium\AuthenticationTrait::getCredential
     */
    public function testGetCredential()
    {
        $expected = 'test-credential-' . __METHOD__;
        putenv('CREDENTIAL=' . $expected);
        $credential = $this->object->getCredential();
        $this->assertSame($expected, $credential);
    }

    /**
     * @Title("Credential env var is required")
     * @covers WebinoDev\Test\Selenium\AuthenticationTrait::getCredential
     * @expectedException \RuntimeException
     */
    public function testGetCredentialExpectsCredentialEnv()
    {
        $this->object->getCredential();
    }

    /**
     * @Title("Get the credential fron env vars just once")
     * @covers WebinoDev\Test\Selenium\AuthenticationTrait::getCredential
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
     * @Title("Required to call setAuthSuccessLocator() before authentication()")
     * @covers WebinoDev\Test\Selenium\AuthenticationTrait::getAuthSuccessLocator
     * @expectedException \RuntimeException
     */
    public function testGetAuthSuccessLocatorEmptyThrowsException()
    {
        $this->object->getAuthSuccessLocator();
    }

    /**
     * Setup authentication test prerequisites
     *
     * @return array
     */
    private function prepareAuthenticateTest()
    {
        $identity = 'test-identity-' . __METHOD__;
        putenv('IDENTITY=' . $identity);
        $credential = 'test-credential-' . __METHOD__;
        putenv('CREDENTIAL=' . $credential);

        $identityElm    = $this->getMock(WebDriver\TestElement::class);
        $credentialElm  = $this->getMock(WebDriver\TestElement::class);
        $successElm     = $this->getMock(WebDriver\TestElement::class);
        $successLocator = '.test-success';

        $this->getWebDriverSession()->expects($this->exactly(5))
            ->method('element')
            ->withConsecutive(
                ['name', 'identity'],
                ['name', 'credential'],
                ['css selector', $successLocator],
                ['css selector', $successLocator],
                ['css selector', $successLocator]
            )
            ->will($this->onConsecutiveCalls(
                $this->returnValue($identityElm),
                $this->returnValue($credentialElm),
                $this->returnValue(false),
                $this->returnValue(false),
                $this->returnValue($successElm)
            ));

        $identityElm->expects($this->exactly(2))
            ->method('clear');

        $identityElm->expects($this->exactly(2))
            ->method('sendKeys')
            ->withConsecutive(
                [''],
                [$identity]
            );

        $credentialElm->expects($this->once())
            ->method('clear');

        $credentialElm->expects($this->once())
            ->method('sendKeys')
            ->with($credential);

        $credentialElm->expects($this->once())
            ->method('submit');

        return [$successLocator, $successElm];
    }

    /**
     * @Title("Authentication works")
     */
    public function testAuthenticate()
    {
        $args = $this->prepareAuthenticateTest();

        $this->object->session = $this->getWebDriverSession();
        $this->object->setAuthSuccessLocator($args[0]);
        $this->object->authenticate();
    }

    /**
     * @Title("Callback is called on success element after authentication")
     * @covers WebinoDev\Test\Selenium\AuthenticationTrait::authenticate
     */
    public function testAuthenticateWithCallback()
    {
        $args = $this->prepareAuthenticateTest();

        $callback = $this->getMock(TestCallback::class);
        $callback->expects($this->once())
            ->method('__invoke')
            ->with($args[1]);

        $this->object->session = $this->getWebDriverSession();
        $this->object->setAuthSuccessLocator($args[0]);
        $this->object->authenticate($callback);
    }
}
