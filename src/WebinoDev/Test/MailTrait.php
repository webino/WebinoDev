<?php
/**
 * Webino (http://webino.sk/)
 *
 * @link        https://github.com/webino/WebinoDev/ for the canonical source repository
 * @copyright   Copyright (c) 2014-2018 Webino, s. r. o. (http://webino.sk/)
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
    public abstract function getMailDir();

    /**
     * Assert that no mail was sent
     *
     * @return $this
     */
    public function assertNoMail()
    {
        try {
            $this->readMail();
        } catch (\Exception $exc) {
            $this->assertSame('No mail found', $exc->getMessage());
            return $this;
        }

        $this->fail();
        return $this;
    }

    /**
     * Read mail from temporary directory
     *
     * @return Message
     * @throws RuntimeException
     */
    public function readMail()
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
        $message = Message::fromFile($path);

        unlink($path);
        return $message;
    }

    /**
     * Wait for mail to read
     *
     * @return Message
     * @throws RuntimeException
     */
    public function waitForMail()
    {
        $tout = 30;
        $tn   = 0;

        while (empty($mail)) {
            $tn++;
            sleep(1);

            try {
                $mail = $this->readMail();
            } catch (\Throwable $exc) {

            }

            if ($tn >= $tout) {
                throw new RuntimeException('Timeout exceeded');
            }
        }

        return $mail;
    }

    /**
     * Checks no mail For a certain time
     *
     * @return $this
     */
    public function waitAssertNoMail()
    {
        $tout = 5;
        $tn   = 0;

        while (1) {
            $tn++;
            sleep(1);

            $this->assertNoMail();
            if ($this->hasFailed()) {
                return $this;
            }

            if ($tn >= $tout) {
                return $this;
            }
        }

        return $this;
    }

    /**
     * Returns mail directory iterator
     *
     * @return RegexIterator
     */
    public function createMailDirIterator()
    {
        return new RegexIterator(new DirectoryIterator($this->getMailDir()), '~ZendMail_~');
    }
}
