<?php
/**
 * Webino (http://webino.sk/)
 *
 * @link        https://github.com/webino/WebinoDev/ for the canonical source repository
 * @copyright   Copyright (c) 2014 Webino, s. r. o. (http://webino.sk/)
 * @license     BSD-3-Clause
 */

namespace WebinoDev\Test;

use Yandex\Allure\Adapter\Annotation\Features;
use Yandex\Allure\Adapter\Annotation\Title;

/**
 * @Title("PDF trait for tests")
 * @Features({"Testing"})
 */
class PdfTraitTest extends PdfTestCase
{
    /**
     * @var AbstractTestCase
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new PdfTestCase;
    }

    /**
     * @Title("Create PDF")
     * @covers WebinoDev\Test\PdfTrait::createPdf
     */
    public function testCreatePdf()
    {
        $source = file_get_contents(__DIR__ . '/../../resources/data/pdf/test.pdf');
        $pdf = $this->object->createPdf($source);
        $this->assertSame('PDF test', $pdf->getText());
    }
}
