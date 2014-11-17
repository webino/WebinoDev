<?php
/**
 * Webino (http://webino.sk/)
 *
 * @link        https://github.com/webino/WebinoDev/ for the canonical source repository
 * @copyright   Copyright (c) 2014 Webino, s. r. o. (http://webino.sk/)
 * @license     BSD-3-Clause
 */

namespace WebinoDev\Test\Functional;

use org\bovigo\vfs\vfsStream;
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
     * {@inheritDoc}
     */
    protected function setUp()
    {
        $this->object = new MailTestCase;
    }

    /**
     * {@inheritDoc}
     */
    protected function tearDown()
    {
       // DO NOT REMOVE !!!
    }

    /**
     * @Title("Mail virtual filesystem works")
     * @covers WebinoDev\Test\Functional\AbstractMaiLTestCase::setUp
     * @covers WebinoDev\Test\Functional\MailTrait::setUpMailVfs
     * @covers WebinoDev\Test\Functional\MailTrait::getMailDir
     */
    public function testSetUpMailVfs()
    {
        $this->object->setUp();
        $this->assertFileExists($this->object->getMailDir());
    }

    /**
     * @Title("Mail virtual filesystem works")
     * @covers WebinoDev\Test\Functional\AbstractMaiLTestCase::tearDown
     * @covers WebinoDev\Test\Functional\MailTrait::unregisterMailVfs
     * @covers WebinoDev\Vfs\StreamWrapper::unregister
     */
    public function testUnregisterMailVfs()
    {
        $this->object->setUp();
        $this->object->unregisterMailVfs();
        $this->assertNotContains(vfsStream::SCHEME, stream_get_wrappers());
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
