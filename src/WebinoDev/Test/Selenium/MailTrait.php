<?php
/**
 * Webino (http://webino.sk/)
 *
 * @link        https://github.com/webino/WebinoDev/ for the canonical source repository
 * @copyright   Copyright (c) 2014 Webino, s. r. o. (http://webino.sk/)
 * @license     BSD-3-Clause
 */

namespace WebinoDev\Test\Selenium;

use DirectoryIterator;
use RegexIterator;
use WebinoDev\Test\Exception\RuntimeException;
use Zend\Mail\Message;

/**
 * WebDriver test mail trait
 *
 * Use this trait when you want a WebDriver mail testing.
 */
trait MailTrait
{
    /**
     * @var string
     */
    protected static $mailDir = 'tmp/mail';

    /**
     * Creates temporary mail directory
     */
    protected function setUpMailDir()
    {
        is_dir($this::$mailDir) or mkdir($this::$mailDir, 0777, true);
        $this->cleanMail();
    }

    /**
     * Cleans up temporary mail directory
     */
    protected function tearDownMailDir()
    {
        $this->cleanMail();
        is_dir($this::$mailDir) and rmdir($this::$mailDir);
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

    /**
     * Read mail from temporary directory
     *
     * @return Message
     * @throws RuntimeException
     */
    protected function readMail()
    {
        foreach ($this->createMailDirIterator() as $fileInfo) {
            $path = $fileInfo->getPathname();
            $message = Message::fromString(join(PHP_EOL, file($path)));
            unlink($path);
            return $message;
        }

        throw new RuntimeException('No mail found');
    }

    /**
     * Returns mail directory iterator
     *
     * @return RegexIterator
     */
    protected function createMailDirIterator()
    {
        return new RegexIterator(new DirectoryIterator($this::$mailDir), '~ZendMail_~');
    }
}
