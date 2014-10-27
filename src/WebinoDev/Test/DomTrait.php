<?php
/**
 * Webino (http://webino.sk/)
 *
 * @link        https://github.com/webino/WebinoDev/ for the canonical source repository
 * @copyright   Copyright (c) 2014 Webino, s. r. o. (http://webino.sk/)
 * @license     BSD-3-Clause
 */

namespace WebinoDev\Test;

use DOMDocument;
use DOMXPath;

/**
 * WebDriver test DOM trait
 *
 * Use this trait when you want DOM testing.
 */
trait DomTrait
{
    /**
     * Create DOM document from XHTML source
     *
     * @param string $xhtml
     * @return DOMDocument
     */
    protected function createDom($xhtml)
    {
        $dom = new DOMDocument;
        libxml_use_internal_errors(true);
        $dom->loadHTML($xhtml);
        $dom->xpath = new DOMXPath($dom);
        return $dom;
    }
}
