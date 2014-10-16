<?php

namespace WebinoDev\Test\Selenium;

/**
 * Base test case for authentication Selenium WebDriver tests
 */
abstract class AbstractAuthenticationTestCase extends AbstractTestCase
{
    use AuthenticationTrait;
}
