<?php
/**
 * Webino (http://webino.sk/)
 *
 * @link        https://github.com/webino/WebinoDev/ for the canonical source repository
 * @copyright   Copyright (c) 2012-2019 Webino, s. r. o. (http://webino.sk/)
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
    public function createDom($xhtml)
    {
        $dom = new DOMDocument;
        libxml_use_internal_errors(true);
        $dom->loadHTML($xhtml);
        $dom->xpath = new DOMXPath($dom);
        return $dom;
    }

    /**
     * Create DOM document from XML source
     *
     * @param string $xml
     * @param null $namespace
     * @return DOMDocument
     */
    public function createXmlDom($xml, $namespace = null)
    {
        $dom = new DOMDocument;
        $dom->loadXML($xml);
        $dom->xpath = new DOMXPath($dom);

        $namespace
            and $dom->xpath->registerNamespace($namespace, $dom->lookupNamespaceUri($dom->namespaceURI));

        return $dom;
    }
}
