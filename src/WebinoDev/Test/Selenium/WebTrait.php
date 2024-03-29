<?php
/**
 * Webino (http://webino.sk/)
 *
 * @link        https://github.com/webino/WebinoDev/ for the canonical source repository
 * @copyright   Copyright (c) 2018 Webino, s. r. o. (http://webino.sk/)
 * @license     BSD-3-Clause
 */

namespace WebinoDev\Test\Selenium;

use WebinoBase\Test\Selenium\BaseTestTrait;

/**
 * Trait SourceTrait
 *
 * @property-read object $session
 *
 * @method assertContains($haystack, $needle)
 * @method assertNotContains($haystack, $needle)
 * @method assertStringEndsWith($suffix, $string)
 */
trait WebTrait
{
    /**
     * Return web title
     *
     * @return string
     */
    public function getWebTitle()
    {
        return (string) $this->session->title();
    }

    /**
     * Return web source
     *
     * @return string
     */
    public function getWebSource()
    {
        return (string) $this->session->source();
    }

    /**
     * @return string
     */
    protected function getServerUrl()
    {
        $parts = parse_url($this->session->url());
        return $parts['scheme'] . '://' . $parts['host'];
    }

    /**
     * @return string
     */
    protected function getSessionId()
    {
        return $this->session->getCookie('PHPSESSID')['value'];
    }

    /**
     * @return bool
     */
    public function is404()
    {
        $url = $this->session->url();
        $headers = get_headers($url);
        return empty($headers[0]) ? true : ('HTTP/1.0 404 Not Found' === $headers[0]);
    }

    /**
     * Assert that page source contains given string
     *
     * @param string $string
     * @return $this
     */
    public function assertWebContains($string)
    {
        $this->assertContains((string) $string, $this->getWebSource());
        return $this;
    }

    /**
     * Assert that page source does not contains given string
     *
     * @param string $string
     * @return $this
     */
    public function assertWebNotContains($string)
    {
        $this->assertNotContains((string) $string, $this->getWebSource());
        return $this;
    }

    /**
     * Assert that web page is without errors
     *
     * @return $this
     */
    protected function assertWebNotError()
    {
        $title = $this->getWebTitle();
        $this->assertNotContains('Error', $title);
        $this->assertNotContains('Exception', $title);

        // strip script contents & tags
        $text = substr($this->getWebSource(), 0, 10000);
        $expr = '~<(script).*?>.*?</script>~si';
        $src  = strip_tags(preg_replace($expr, '', $text));

        $this->assertNotContains('Error', $src);
        $this->assertNotContains('Exception', $src);
        return $this;
    }

    /**
     * @todo remove, deprecated
     * @deprecated use assertWebNotError() instead
     * @return $this
     */
    protected function assertNotError()
    {
        $this->assertWebNotError();
        return $this;
    }

    /**
     * Asserts that actual URL path (wuthout ?query) ends with expected string
     *
     * @param string $suffix
     * @param string $string
     * @return $this
     */
    public function assertUrlPathEndsWith($suffix, $string)
    {
        $this->assertStringEndsWith($suffix, explode('?', $string, 2)[0]);
    }

    /**
     * Opens URI and asserts not error
     *
     * @param string $path
     * @param string|null $caption
     * @return $this
     */
    protected function open($path = '', $caption = null)
    {
        $this->session->open($this->uri . $path);
        $this->debugNotify($caption);
        $this->assertWebNotError();
        return $this;
    }

    /**
     * @param string $path
     * @param string $caption
     * @return $this
     * @deprecated use open()
     * @todo remove
     */
    protected function openOk($path = '', $caption = 'Home')
    {
        return $this->open($path, $caption);
    }

    /**
     * Get raw source from URL
     *
     * @param string $url
     * @param null $sessId
     * @return string
     */
    protected function source($url, $sessId = null)
    {
        $sid = $sessId ? $sessId : $this->getSessionId();
        $opts = ['http' => ['header' => 'Cookie: PHPSESSID=' . $sid ."\r\n"]];
        return file_get_contents($url, false, stream_context_create($opts));
    }
}
