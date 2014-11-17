<?php
/**
 * Webino (http://webino.sk/)
 *
 * @link        https://github.com/webino/WebinoDev/ for the canonical source repository
 * @copyright   Copyright (c) 2014 Webino, s. r. o. (http://webino.sk/)
 * @license     BSD-3-Clause
 */

namespace WebinoDev\Test\Selenium;

use WebinoDev\Test\Functional\SeleniumTestTrait;
use Yandex\Allure\Adapter\Annotation\Features;
use Yandex\Allure\Adapter\Annotation\Title;
use Zend\Mail\Message;

/**
 * @Title("Abstract class for selenium mail tests works")
 * @Features({"Selenium testing"})
 */
class AbstractMailTestCaseTest extends AbstractMailTestCase
{
    use SeleniumTestTrait;

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
        $this->setUpWebDriver();
        putenv('URI=test-uri-' . __METHOD__);

        // create object for testing
        $this->object = new MailTestCase;
        $this->object->session = $this->getWebDriverSession();
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
     * @Title("Reading mail")
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
     * @Title("Reading no mail")
     * @covers WebinoDev\Test\Selenium\MailTrait::readMail
     * @expectedException RuntimeException
     */
    public function testReadNoMail()
    {
        $this->object->setUp();
        $this->object->readMail();
        $this->object->tearDown();
    }

    /**
     * @Title("Read mail consecutive")
     * @covers WebinoDev\Test\Functional\MailTrait::readMail
     */
    public function testReadMailConsecutive()
    {
        $this->object->setUp();
        $expected = ['Test message subject 01', 'Test message subject 02', 'Test message subject 03'];

        // first
        $message = new Message;
        $message->setSubject($expected[0]);
        file_put_contents(MailTestCase::$mailDir . '/ZendMail_' . microtime(true) . '.eml', $message->toString());

        // second
        $message = new Message;
        $message->setSubject($expected[1]);
        file_put_contents(MailTestCase::$mailDir . '/ZendMail_' . microtime(true) . '.eml', $message->toString());

        // third
        $message = new Message;
        $message->setSubject($expected[2]);
        file_put_contents(MailTestCase::$mailDir . '/ZendMail_' . microtime(true) . '.eml', $message->toString());

        // check first
        $mail = $this->object->readMail();
        $this->assertNotNull($mail);
        $this->assertSame($expected[0], $mail->getSubject());

        // check second
        $mail = $this->object->readMail();
        $this->assertNotNull($mail);
        $this->assertSame($expected[1], $mail->getSubject());

        // check third
        $mail = $this->object->readMail();
        $this->assertNotNull($mail);
        $this->assertSame($expected[2], $mail->getSubject());

        $this->object->tearDown();
    }
}
