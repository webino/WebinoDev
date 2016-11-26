<?php
/**
 * Webino (http://webino.sk/)
 *
 * @link        https://github.com/webino/WebinoDev/ for the canonical source repository
 * @copyright   Copyright (c) 2014-2016 Webino, s. r. o. (http://webino.sk/)
 * @license     BSD-3-Clause
 */

namespace WebinoDev\Test\Functional;

use WebinoDev\Test\Selenium\WebDriver\TestSession;
use Yandex\Allure\Adapter\Annotation\Features;
use Yandex\Allure\Adapter\Annotation\Title;

/**
 * @Title("Trait for functional selenium tests works")
 * @Features({"Functional testing"})
 */
class SeleniumTestTraitTest extends SeleniumTestTestCase
{
    /**
     * @var SeleniumTestTestCase
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new SeleniumTestTestCase;
    }

    /**
     * @Title("Selenium functional test trait works")
     * @covers WebinoDev\Test\Functional\SeleniumTestTrait::setUpWebDriver
     * @covers WebinoDev\Test\Functional\SeleniumTestTrait::getWebDriverSession
     */
    public function testSetUpWebDriverAndGetWebDriverSession()
    {
        $this->object->setUpWebDriver();
        $session = $this->object->getWebDriverSession();
        $this->assertInstanceOf(TestSession::class, $session);
    }
}
