# Webino developers module <br /> for Zend Framework 2

Module to ease development of the Webino modules.

## Features

- Smart dependency injection definition generator
- Base classes for Selenium WebDriver tests
- Utility functions

## Requirements

- PHP 5.4
- ZendFramework 2

## Setup

Following steps are necessary to get this module working, considering a zf2-skeleton or very similar application:

1. Run `php composer.phar require webino/webino-dev:dev-develop`
2. Add `WebinoDev` to the enabled modules list

## QuickStart

### Dependency injection definition generator

    use WebinoDev\Di\Definition\Generator;

    // Autoloader
    $loader = require __DIR__ . '/../vendor/autoload.php';
    $loader->add(__NAMESPACE__, __DIR__ . '/../src');

    // Dump DI definition
    (new Generator(__DIR__))->compile()->dump();

With custom paths, relative to vendor directory:

    (new Generator(__DIR__))->compile(['custom/path/1', 'custom/path/2'])->dump();

With ignored paths:

    (new Generator(__DIR__))->setIgnore(['regex1', 'regex2', 'etc.'])->compile()->dump();

### Selenium WebDriver tests

    use WebinoDev\Test\Selenium\AbstractTestCase;

    class HomeTest extends AbstractTestCase
    {
        public function testHome()
        {
            $this->session->open($this->uri);
            $this->assertNotError();
        }
    }

With authentication:

    use WebinoDev\Test\Selenium\AbstractAuthenticationTestCase;

    class AuthenticationTest extends AbstractAuthenticationTestCase
    {
        public function testAuthentication()
        {
            $this->session->open($this->uri);
            $this->assertNotError();
            $this->setAuthenticatedCssSelector('.authentication-success');
            $this->authenticate();
        }
    }

or use trait:

    use WebinoDev\Test\Selenium\AbstractTestCase;

    class AuthenticationTest extends AbstractTestCase
    {
        use AuthenticationTrait;
    }

## Development

We will appreciate any contributions on development of this module.

Learn (How to develop webino modules)[]

## Addendum

Please, if you are interested in this Zend Framework module report any issues and don't hesitate to contribute.
