<?php

namespace WebinoDev;

/**
 * Generated by PHPUnit_SkeletonGenerator 1.2.1 on 2014-10-12 at 17:20:06.
 */
class ModuleTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Module
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new Module;
    }

    /**
     * @covers WebinoDev\Module::init
     */
    public function testInit()
    {
        $this->object->init();
        $this->assertTrue(function_exists('d'));
        $this->assertTrue(function_exists('dd'));
    }

    /**
     * @covers WebinoDev\Module::getConfig
     */
    public function testGetConfig()
    {
        $this->assertTrue(is_array($this->object->getConfig()));
    }
}
