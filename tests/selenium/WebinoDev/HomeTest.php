<?php

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
