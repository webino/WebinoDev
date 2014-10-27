# Webino developer's module <br /> for Zend Framework 2

Module to ease development of the Webino modules.

## Features

- Utility functions
- Smart dependency injection definition generator
- DOM testing
- Mail testing
- Base classes for Selenium WebDriver tests
  - Authentication testing
  - Forms testing
  - Ajax testing

## Requirements

- PHP 5.4
- ZendFramework 2

## Setup

Open terminal and go to your application directory

1. Use this module only in your development environment
- Run `php composer.phar require webino/webino-dev:dev-develop`
- Add `WebinoDev` to the enabled modules list

  *NOTE: Considering a zf2-skeleton or very similar application.*

## QuickStart

### Utility functions

```php
d();  // var_dump();
dd(); // var_dump();exit;
p();  // print_r();
pd(); // print_r();exit;
pr(); // return print_r();
e();  // throw new \WebinoDev\Exception\DevelopmentException;
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

        $this->clickLink('Link example');
    }
}
```

#### Testing DOM

```php
use WebinoDev\Test\DomTrait;

/**
 * Concrete test trait
 */
class DomTestCase extends \PHPUnit_Framework_TestCase
{
    use DomTrait;

    public function testDom()
    {
        $xhtml = '<html/>';
        $dom   = $this->createDom($xhtml);
        $elm   = $dom->xpath->query('//html')->item(0);
        $this->assertNotNull($elm);
    }
}
```

#### Testing authentication

```php
use WebinoDev\Test\Selenium\AbstractAuthenticationTestCase;

class AuthenticationTest extends AbstractAuthenticationTestCase
{
    public function testAuthentication()
    {
        $this->session->open($this->uri);
        $this->assertNotError();
        $this->setAuthSuccessLocator('.authentication-success');
        $this->authenticate();
    }
}
```

**or use trait**

```php
use WebinoDev\Test\Selenium\AbstractTestCase;

class AuthenticationTest extends AbstractTestCase
{
    use AuthenticationTrait;
}
```

#### Testing forms

```php
use PHPWebDriver_WebDriverBy as By;
use WebinoDev\Test\Selenium\AbstractTestCase;

class HomeTest extends AbstractTestCase
{
    public function testHome()
    {
        $this->enterInput(
            'email',
            'test@example.com',
            function ($elm) {
                $elm->submit();
            }
        );

        $this->waitFor(
            function () {
                return $this->session->element(By::CLASS_NAME, '.example-success');
            },
            function ($elm) {
                $this->assertSame('example', $elm->text());
            }
        );
    }
}
```

#### Testing AJAX

```php
use PHPWebDriver_WebDriverBy as By;
use WebinoDev\Test\Selenium\AbstractTestCase;

class HomeTest extends AbstractTestCase
{
    public function testHome()
    {
        $this->element(By::CLASS_NAME, 'ajax-btn')->click();
        $this->waitForAjax();
        $result = $this->element(By::CLASS_NAME, 'ajax-result')->text();
        $this->assertSame('expected ajax result', $result);
    }
}

```

#### Testing mail

Supports functional and selenium mail testing.

##### Functional mail testing

Assumed that mail messages are saved as files to the virtual filesystem `tmp/mail` directory.

*NOTE: Use `org\bovigo\vfs\vfsStream::url('root/tmp/mail')` for virtual filesystem directory path.*

```php
use WebinoDev\Test\Functional\AbstractMailTestCase;

class MailTest extends AbstractMailTestCase
{
    public function testMail()
    {
        // ...

        $mail = $this->object->readMail();
        $this->assertNotNull($mail);
        $this->assertSame($expectedSubject, $mail->getSubject());
    }
}
```

**or use trait**

```php
use WebinoDev\Test\Functional\AbstractTestCase;
use WebinoDev\Test\Functional\MailTrait;

class MailTest extends AbstractTestCase
{
    use MailTrait;

    /**
     * {@inheritDoc}
     */
    protected function setUp()
    {
        $this->setUpMailVfs();
    }
}
```

##### Testing mail with Selenium

Assumed that mail messages are saved as files to the `tmp/mail` directory, relative to the application.

```php
use WebinoDev\Test\Selenium\AbstractMailTestCase;

class MailTest extends AbstractMailTestCase
{
    public function testMail()
    {
        // ...

        $mail = $this->object->readMail();
        $this->assertNotNull($mail);
        $this->assertSame($expectedSubject, $mail->getSubject());
    }
}
```

**or use trait**

```php
use WebinoDev\Test\Selenium\AbstractTestCase;
use WebinoDev\Test\Selenium\MailTrait;

class MailTest extends AbstractTestCase
{
    use MailTrait;

    /**
     * {@inheritDoc}
     */
    protected function setUp()
    {
        parent::setUp();
        $this->setUpMailDir();
    }

    /**
     * {@inheritDoc}
     */
    protected function tearDown()
    {
        parent::tearDown();
        $this->tearDownMailDir();
    }
}
```

## Development

We will appreciate any contributions on development of this module.

Learn [How to develop Webino modules](https://github.com/webino/Webino/wiki/How-to-develop-Webino-modules)

## Addendum

Please, if you are interested in this Zend Framework module report any issues and don't hesitate to contribute.
