<?php
/**
 * Webino (http://webino.sk/)
 *
 * @link        https://github.com/webino/WebinoDev/ for the canonical source repository
 * @copyright   Copyright (c) 2014 Webino, s. r. o. (http://webino.sk/)
 * @license     BSD-3-Clause
 */

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
        $this->setAuthSuccessLocator('.authentication-success');
        $this->authenticate();
    }
}
