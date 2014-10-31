<?php
/**
 * Webino (http://webino.sk/)
 *
 * @link        https://github.com/webino/WebinoDev/ for the canonical source repository
 * @copyright   Copyright (c) 2014 Webino, s. r. o. (http://webino.sk/)
 * @license     BSD-3-Clause
 */

namespace WebinoDev;

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
        $this->openOk();
        $this->clickLink('wiki');
    }

    /**
     * @Title("Advanced web check")
     */
    public function testAdvanced()
    {
        $this->openOk('application/index/test');

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
        $this->openOk('application/index/ajax');

        $this->elementByClassName('ajax-btn')->click();
        $this->waitForAjax();
        $elm = $this->elementByClassName('ajax-content');
        $this->assertSame('AJAX TEST', $elm->text());
    }

    /**
     * @Title("Clicking ajax-link")
     * @Features({"Ajax testing"})
     */
    public function testClickAjaxLink()
    {
        $this->openOk('application/index/ajax');

        $this->clickAjaxLink('Ajax link');
        $elm = $this->elementByClassName('ajax-content');
        $this->assertSame('AJAX TEST', $elm->text());
    }
}
