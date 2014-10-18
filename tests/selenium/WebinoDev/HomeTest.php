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

/**
 * Test abstract test cases for Selenium WebDriver
 */
class HomeTest extends AbstractTestCase
{
    /**
     * Simple web check
     */
    public function testHome()
    {
        $this->session->open($this->uri);
        $this->assertNotError();
    }
}
