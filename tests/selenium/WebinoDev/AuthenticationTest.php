<?php

namespace WebinoDev;

use WebinoDev\Test\Selenium\AbstractAuthenticationTestCase;

/**
 * Test abstract authenticateion test cases for Selenium WebDriver
 */
class AuthenticationTest extends AbstractAuthenticationTestCase
{
    /**
     * Opens URI check tat there are no errors and authenticate
     */
    public function testAuthentication()
    {
        $this->session->open($this->uri . 'application/index/authentication');
        $this->assertNotError();
        $this->setAuthenticatedCssSelector('.authentication-success');
        $this->authenticate();
    }
}
