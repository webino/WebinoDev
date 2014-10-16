# Webino developer's module <br /> for Zend Framework 2

Module to ease development of the Webino modules.

## Features

- Utility functions
- Smart dependency injection definition generator
- Base classes for Selenium WebDriver tests

## Requirements

- PHP 5.4
- ZendFramework 2

## Setup

Open terminal and go to your application directory

1. Run `php composer.phar require webino/webino-dev:dev-develop`
- Add `WebinoDev` to the enabled modules list

  *NOTE: Considering a zf2-skeleton or very similar application.*

## QuickStart

### Utility functions

```php
d();  // var_dump();
dd(); // var_dump();exit;
```

### Dependency injection definition generator

Create file `bin/definition_generator` in your module, with following code:

```php
#!/usr/bin/env php
<?php

namespace WebinoExample;

use WebinoDev\Di\Definition\Generator;

// Autoloader
$loader = require __DIR__ . '/../vendor/autoload.php';
$loader->add(__NAMESPACE__, __DIR__ . '/../src');

// Dump DI definition
(new Generator(__DIR__))->compile()->dump();
```

*NOTE: Assuming `WebinoExample/bin/` and `WebinoExample/vendor/` directories.* <br />
*NOTE: Use your namespace instead of WebinoExample.*

With custom paths, relative to vendor directory:

```php
(new Generator(__DIR__))->compile(['custom/path/1', 'custom/path/2'])->dump();
```

With ignored paths:

```php
(new Generator(__DIR__))->setIgnore(['regex1', 'regex2', 'etc.'])->compile()->dump();
```

### Selenium WebDriver tests

```php
use WebinoDev\Test\Selenium\AbstractTestCase;

class HomeTest extends AbstractTestCase
{
    public function testHome()
    {
        $this->session->open($this->uri);
        $this->assertNotError();
    }
}
```

With authentication:

```php
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
```

or use trait:

```php
use WebinoDev\Test\Selenium\AbstractTestCase;

class AuthenticationTest extends AbstractTestCase
{
    use AuthenticationTrait;
}
```

## Development

We will appreciate any contributions on development of this module.

Learn [How to develop Webino modules](https://github.com/webino/Webino/wiki/How-to-develop-Webino-modules)

## Addendum

Please, if you are interested in this Zend Framework module report any issues and don't hesitate to contribute.
