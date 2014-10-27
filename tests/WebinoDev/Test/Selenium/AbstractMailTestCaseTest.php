<?php
/**
 * Webino (http://webino.sk/)
 *
 * @link        https://github.com/webino/WebinoDev/ for the canonical source repository
 * @copyright   Copyright (c) 2014 Webino, s. r. o. (http://webino.sk/)
 * @license     BSD-3-Clause
 */

namespace WebinoDev\Test\Selenium;

use Yandex\Allure\Adapter\Annotation\Features;
use Yandex\Allure\Adapter\Annotation\Title;
use Zend\Mail\Message;

/**
 * @Title("Abstract class for selenium mail tests works")
 * @Features({"Selenium testing"})
 */
class AbstractMailTestCaseTest extends AbstractMailTestCase
{
    /**
     * @var AbstractMailTestCase
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        WebDriver\TestWebDriver::$session = $this->getMock('WebinoDev\Test\Selenium\WebDriver\TestSession');

        class_exists('PHPWebDriver_WebDriver', false) or
            class_alias('WebinoDev\Test\Selenium\WebDriver\TestWebDriver', 'PHPWebDriver_WebDriver');

        putenv('URI=test-uri-' . __METHOD__);

        // create object for testing
        $this->object = new MailTestCase;
        $this->object->session = WebDriver\TestWebDriver::$session;
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
        putenv('URI');
    }

    /**
     * @Title("Mail testing setup works")
     * @covers WebinoDev\Test\Selenium\AbstractMailTestCase::setUp
     * @covers WebinoDev\Test\Selenium\AbstractMailTestCase::tearDown
     * @covers WebinoDev\Test\Selenium\MailTrait::setUpMailDir
     * @covers WebinoDev\Test\Selenium\MailTrait::tearDownMailDir
     */
    public function testSetUpAndTearDown()
    {
        $this->object->setUp();
        $this->assertFileExists(MailTestCase::$mailDir);
        $this->object->tearDown();
        $this->assertFileNotExists(MailTestCase::$mailDir);
    }

    /**
     * @Title("Cleaning mail directory works")
     * @covers WebinoDev\Test\Selenium\MailTrait::cleanMail
     */
    public function testCleanMail()
    {
        $this->object->setUp();
        $mailPath = MailTestCase::$mailDir . '/ZendMail_0.eml';
        touch($mailPath);

        $this->object->cleanMail();
        $this->assertFileNotExists($mailPath);
        $this->object->tearDown();
    }

    /**
     * @Title("Reading mail works")
     * @covers WebinoDev\Test\Selenium\MailTrait::readMail
     * @covers WebinoDev\Test\Selenium\MailTrait::createMailDirIterator
     */
    public function testReadMail()
    {
        $this->object->setUp();
        $message = new Message;
        $message->setSubject('Test message subject');

        $mailPath = MailTestCase::$mailDir . '/ZendMail_0.eml';
        file_put_contents($mailPath, $message->toString());

        $mail = $this->object->readMail();
        $this->assertNotNull($mail);
        $this->assertSame($message->getSubject(), $mail->getSubject());
        $this->object->tearDown();
    }

    /**
     * @Title("Reading no mail works")
     * @covers WebinoDev\Test\Selenium\MailTrait::readMail
     * @expectedException RuntimeException
     */
    public function testReadNoMail()
    {
        $this->object->setUp();
        $this->object->readMail();
        $this->object->tearDown();
    }
}
