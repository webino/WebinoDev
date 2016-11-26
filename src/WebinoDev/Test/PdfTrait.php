<?php
/**
 * Webino (http://webino.sk/)
 *
 * @link        https://github.com/webino/WebinoDev/ for the canonical source repository
 * @copyright   Copyright (c) 2014-2016 Webino, s. r. o. (http://webino.sk/)
 * @license     BSD-3-Clause
 */

namespace WebinoDev\Test;

use Smalot\PdfParser\Parser;

/**
 * Test PDF trait
 *
 * Use this trait when you want PDF testing.
 */
trait PdfTrait
{
    /**
     * @var Parser
     */
    private $parser;

    /**
     *
     * @return type
     */
    private function getParser()
    {
        if (null === $this->parser) {
            $this->parser = new Parser;
        }
        return $this->parser;
    }

    /**
     * Create DOM document from XHTML source
     *
     * @param string $source
     * @return \Smalot\PdfParser\Document
     */
    protected function createPdf($source)
    {
        return $this->getParser()->parseContent($source);
    }
}
