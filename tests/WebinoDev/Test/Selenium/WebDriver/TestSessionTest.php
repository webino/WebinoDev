<?php
/**
 * Webino (http://webino.sk/)
 *
 * @link        https://github.com/webino/WebinoDev/ for the canonical source repository
 * @copyright   Copyright (c) 2014 Webino, s. r. o. (http://webino.sk/)
 * @license     BSD-3-Clause
 */

namespace WebinoDev\Test\Selenium\WebDriver;

/**
 * Generated by PHPUnit_SkeletonGenerator 1.2.1 on 2014-10-27 at 17:19:25.
 */
class TestSessionTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var TestSession
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new TestSession;
    }

    /**
     * @covers WebinoDev\Test\Selenium\WebDriver\TestSession::title
     */
    public function testTitle()
    {
        $this->object->title();
    }

    /**
     * @covers WebinoDev\Test\Selenium\WebDriver\TestSession::source
     */
    public function testSource()
    {
        $this->object->source();
    }

    /**
     * @covers WebinoDev\Test\Selenium\WebDriver\TestSession::element
     */
    public function testElement()
    {
        $this->object->element();
    }

    /**
     * @covers WebinoDev\Test\Selenium\WebDriver\TestSession::execute
     */
    public function testExecute()
    {
        $this->object->execute();
    }

    /**
     * @covers WebinoDev\Test\Selenium\WebDriver\TestSession::close
     */
    public function testClose()
    {
        $this->object->close();
    }
}
