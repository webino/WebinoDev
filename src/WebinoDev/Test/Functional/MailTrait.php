<?php
/**
 * Webino (http://webino.sk/)
 *
 * @link        https://github.com/webino/WebinoDev/ for the canonical source repository
 * @copyright   Copyright (c) 2014 Webino, s. r. o. (http://webino.sk/)
 * @license     BSD-3-Clause
 */

namespace WebinoDev\Test\Functional;

use org\bovigo\vfs\vfsStreamWrapper;
use org\bovigo\vfs\vfsStream;
use WebinoDev\Test\MailTrait as BaseMailTrait;

/**
 * Trait for mail functional testing
 *
 * Use this trait when you want mail testing.
 */
trait MailTrait
{
    use BaseMailTrait;

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
}
