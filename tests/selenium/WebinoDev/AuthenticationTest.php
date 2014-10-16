<?php

namespace WebinoDev;

use WebinoDev\Test\Selenium\AbstractAuthenticationTestCase;

/**
 * Test abstract authenticateion test cases for Selenium WebDriver
 */
class AuthenticationTest extends AbstractAuthenticationTestCase
{
    /**
     * Opens URI, check for no errors and authenticates
     */
    public function testAuthentication()
    {
        $this->session->open($this->uri . 'application/index/authentication');
        $this->assertNotError();
        $this->setAuthenticatedCssSelector('.authentication-success');
        $this->authenticate();
    }
}
