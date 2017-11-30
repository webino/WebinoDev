<?php
/**
 * Webino (http://webino.sk/)
 *
 * @link        https://github.com/webino/WebinoDev/ for the canonical source repository
 * @copyright   Copyright (c) 2014-2016 Webino, s. r. o. (http://webino.sk/)
 * @license     BSD-3-Clause
 */

namespace WebinoDev\Test;

/**
 * DOM trait for tests works
 */
class DomTraitTest extends DomTestCase
{
    /**
     * @var DomTestCase
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new DomTestCase;
    }

    /**
     * @Title("Create DOM")
     * @covers WebinoDev\Test\DomTrait::createDom
     */
    public function testCreateDom()
    {
        $title = 'Test DOM';
        $text  = 'Test DOM body';

        $xhtml = sprintf(
            '<html><head><title>%s</title></head><body><section>%s</section></body></html>',
            $title,
            $text
        );

        $dom = $this->object->createDom($xhtml);
        $this->assertInstanceOf('DOMDocument', $dom);
        $this->assertSame($title, $dom->xpath->query('//title')->item(0)->nodeValue);
        $this->assertSame($text, $dom->xpath->query('//section')->item(0)->nodeValue);
    }
}
