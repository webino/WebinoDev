<?php
/**
 * Webino (http://webino.sk/)
 *
 * @link        https://github.com/webino/WebinoDev/ for the canonical source repository
 * @copyright   Copyright (c) 2014-2017 Webino, s. r. o. (http://webino.sk/)
 * @license     BSD-3-Clause
 */

namespace WebinoDev;

use Yandex\Allure\Adapter\Annotation\Title;

/**
 * @Title("WebinDev module tests")
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
     * @Title("Module initialization")
     */
    public function testInit()
    {
        $this->assertTrue(function_exists('d'));
        $this->assertTrue(function_exists('dd'));
        $this->assertTrue(function_exists('p'));
        $this->assertTrue(function_exists('pd'));
        $this->assertTrue(function_exists('pr'));
        $this->assertTrue(function_exists('e'));
    }

    /**
     * @Title("Module getConfig()")
     * @covers WebinoDev\Module::getConfig
     */
    public function testGetConfig()
    {
        $this->assertTrue(is_array($this->object->getConfig()));
    }
}
