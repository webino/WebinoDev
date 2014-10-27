<?php
/**
 * Webino (http://webino.sk/)
 *
 * @link        https://github.com/webino/WebinoDev/ for the canonical source repository
 * @copyright   Copyright (c) 2014 Webino, s. r. o. (http://webino.sk/)
 * @license     BSD-3-Clause
 */

namespace WebinoDev\Test\Functional;

use DirectoryIterator;
use org\bovigo\vfs\vfsStreamWrapper;
use org\bovigo\vfs\vfsStream;
use WebinoDev\Test\Exception\RuntimeException;
use Zend\Mail\Message;

/**
 * Trait for mail functional testing
 *
 * Use this trait when you want mail testing.
 */
trait MailTrait
{
    /**
     * Setup virtual filesystem
     */
    protected function setUpMailVfs()
    {
        vfsStreamWrapper::register();
        vfsStreamWrapper::setRoot(vfsStream::setup('root', null, ['tmp' => ['mail' => []]]));
    }

    /**
     * Returns URL to the virtual filesystem mail directory
     *
     * @return string
     */
    protected function getMailDir()
    {
        return vfsStream::url('root/tmp/mail');
    }

    /**
     * Read mail from virtual filesystem
     *
     * @return Message
     * @throws RuntimeException
     */
    protected function readMail()
    {
        foreach (new DirectoryIterator($this->getMailDir()) as $fileInfo) {
            if (!$fileInfo->isDot()) {
                return Message::fromString(file_get_contents($fileInfo->getPathname()));
            }
        }

        throw new RuntimeException('No mail found');
    }
}
