<?php
/**
 * Webino (http://webino.sk/)
 *
 * @link        https://github.com/webino/WebinoDev/ for the canonical source repository
 * @copyright   Copyright (c) 2014 Webino, s. r. o. (http://webino.sk/)
 * @license     BSD-3-Clause
 */

namespace WebinoDev;

use PHPWebDriver_WebDriverBy as By;
use WebinoDev\Test\Selenium\AbstractTestCase;
use Yandex\Allure\Adapter\Annotation\Features;
use Yandex\Allure\Adapter\Annotation\Title;

/**
 * @Title("Test abstract test cases for Selenium WebDriver")
 */
class HomeTest extends AbstractTestCase
{
    /**
     * @Title("Simple web check")
     */
    public function testHome()
    {
        $this->session->open($this->uri);
        $this->assertNotError();

        $this->clickLink('wiki');
    }

    /**
     * @Title("Advanced web check")
     */
    public function testAdvanced()
    {
        $this->session->open($this->uri . 'application/index/test');
        $this->assertNotError();

        $value = 'Test example value';
        $this->enterInput('example', $value);
        $this->assertInput('example', $value);
    }

    /**
     * @Title("Wait for ajax to finish")
     * @Features({"Ajax testing"})
     */
    public function testWaitForAjax()
    {
        $this->session->open($this->uri . 'application/index/ajax');
        $this->assertNotError();

        $this->session->element(By::CLASS_NAME, 'ajax-btn')->click();
        $elm = $this->session->element(By::CLASS_NAME, 'ajax-content');
        $this->waitForAjax();
        $this->assertSame('AJAX TEST', $elm->text());
    }
}
