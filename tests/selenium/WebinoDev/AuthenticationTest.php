<?php
/**
 * Webino (http://webino.sk/)
 *
 * @link        https://github.com/webino/WebinoDev/ for the canonical source repository
 * @copyright   Copyright (c) 2014-2017 Webino, s. r. o. (http://webino.sk/)
 * @license     BSD-3-Clause
 */

namespace WebinoDev;

use WebinoDev\Test\Selenium\AbstractAuthenticationTestCase;

/**
 * Authentication Testing
 *
 * Test abstract authentication test cases for Selenium WebDriver
 */
class AuthenticationTest extends AbstractAuthenticationTestCase
{
    /**
     * Opens URI, check for no errors and authenticates
     */
    public function testAuthentication()
    {
        $this->open('application/index/authentication');
        $this->setAuthSuccessLocator('.authentication-success');
        $this->authenticate();
    }
}
