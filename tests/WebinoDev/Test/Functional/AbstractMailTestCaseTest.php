<?php
/**
 * Webino (http://webino.sk/)
 *
 * @link        https://github.com/webino/WebinoDev/ for the canonical source repository
 * @copyright   Copyright (c) 2014 Webino, s. r. o. (http://webino.sk/)
 * @license     BSD-3-Clause
 */

namespace WebinoDev\Test\Functional;

use Yandex\Allure\Adapter\Annotation\Features;
use Yandex\Allure\Adapter\Annotation\Title;
use Zend\Mail\Message;

/**
 * @Title("Abstract class for functional mail tests works")
 * @Features({"Functional testing"})
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
        $this->object = new MailTestCase;
    }

    /**
     * @Title("Mail virtual filesystem works")
     * @covers WebinoDev\Test\Functional\AbstractMaiLTestCase::setUp
     * @covers WebinoDev\Test\Functional\MailTrait::setUpMailVfs
     * @covers WebinoDev\Test\Functional\MailTrait::getMailDir
     */
    public function testSetupMailVfs()
    {
        $this->object->setUp();
        $this->assertFileExists($this->object->getMailDir());
    }

    /**
     * @Title("Read mail works")
     * @covers WebinoDev\Test\Functional\MailTrait::readMail
     */
    public function testReadMail()
    {
        $message = new Message;
        $message->setSubject('Test message subject');

        $this->object->setUp();
        file_put_contents($this->object->getMailDir() . '/ZendMail_0.eml', $message->toString());

        $mail = $this->object->readMail();
        $this->assertNotNull($mail);
        $this->assertSame($message->getSubject(), $mail->getSubject());
    }

    /**
     * @Title("Read no mail works")
     * @covers WebinoDev\Test\Functional\MailTrait::readMail
     * @expectedException WebinoDev\Test\Exception\RuntimeException
     */
    public function testReadNoMail()
    {
        $this->object->setUp();
        $this->object->readMail();
    }
}
