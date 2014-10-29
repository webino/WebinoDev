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
use Yandex\Allure\Adapter\Annotation\Features;
use Yandex\Allure\Adapter\Annotation\Title;

/**
 * @Title("Test abstract authenticateion test cases for Selenium WebDriver")
 * @Features({"Authentication Testing"})
 */
class AuthenticationTest extends AbstractAuthenticationTestCase
{
    /**
     * @Title("Opens URI, check for no errors and authenticates")
     */
    public function testAuthentication()
    {
        $this->openOk('application/index/authentication');
        $this->setAuthSuccessLocator('.authentication-success');
        $this->authenticate();
    }
}
