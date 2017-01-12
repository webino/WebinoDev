<?php
/**
 * Webino (http://webino.sk/)
 *
 * @link        https://github.com/webino/WebinoDev/ for the canonical source repository
 * @copyright   Copyright (c) 2014-2017 Webino, s. r. o. (http://webino.sk/)
 * @license     BSD-3-Clause
 */

namespace WebinoDev\Test\Selenium;

use WebinoDev\Test\MailTrait as BaseMailTrait;

/**
 * WebDriver test mail trait
 *
 * Use this trait when you want a WebDriver mail testing.
 */
trait MailTrait
{
    use BaseMailTrait;

    /**
     * @var string
     */
    protected static $mailDir = 'tmp/mail';

    /**
     * Returns mail directory
     *
     * @return string
     */
    protected function getMailDir()
    {
        return $this::$mailDir;
    }

    /**
     * Creates temporary mail directory
     */
    protected function setUpMailDir()
    {
        is_dir($this::$mailDir) or mkdir($this->getMailDir(), 0777, true);
        $this->cleanMail();
    }

    /**
     * Cleans up temporary mail directory
     */
    protected function tearDownMailDir()
    {
        $this->cleanMail();
        is_dir($this->getMailDir()) and @rmdir($this->getMailDir());
    }

    /**
     * Remove all mail files
     */
    protected function cleanMail()
    {
        foreach ($this->createMailDirIterator() as $fileInfo) {
            $path = $fileInfo->getPathname();
            unlink($path);
        }
    }
}
