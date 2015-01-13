<?php
/**
 * Webino (http://webino.sk/)
 *
 * @link        https://github.com/webino/WebinoDev/ for the canonical source repository
 * @copyright   Copyright (c) 2014 Webino, s. r. o. (http://webino.sk/)
 * @license     BSD-3-Clause
 */

namespace WebinoDev\Test;

use DirectoryIterator;
use RegexIterator;
use WebinoDev\Test\Exception\RuntimeException;
use WebinoDev\Mail\Message;

/**
 * WebDriver test mail trait
 *
 * Use this trait when you want a mail testing.
 */
trait MailTrait
{
    /**
     * Returns path to the mail directory
     */
    protected abstract function getMailDir();

    /**
     * Read mail from temporary directory
     *
     * @return Message
     * @throws RuntimeException
     */
    protected function readMail()
    {
        $files = [];
        foreach ($this->createMailDirIterator() as $fileInfo) {
            /* @var $fileInfo \SplFileInfo */
            $files[$fileInfo->getFilename()] = $fileInfo->getPathname();
        }

        if (empty($files)) {
            throw new RuntimeException('No mail found');
        }

        ksort($files);

        $path    = current($files);
        $message = Message::fromString(join(PHP_EOL, file($path, FILE_IGNORE_NEW_LINES)));

        unlink($path);
        return $message;
    }

    /**
     * Returns mail directory iterator
     *
     * @return RegexIterator
     */
    protected function createMailDirIterator()
    {
        return new RegexIterator(new DirectoryIterator($this->getMailDir()), '~ZendMail_~');
    }
}
