<?php
/**
 * Webino (http://webino.sk/)
 *
 * @link        https://github.com/webino/WebinoDev/ for the canonical source repository
 * @copyright   Copyright (c) 2014-2018 Webino, s. r. o. (http://webino.sk/)
 * @license     BSD-3-Clause
 */

namespace WebinoDev\Mail;

use eXorus\PhpMimeMailParser\Parser;
use Zend\Mail\Headers;
use Zend\Mail\Message as BaseMessage;

/**
 * Extended Zend's mail message with attachments support
 */
class Message extends BaseMessage
{
    /**
     * @var Parser
     */
    private $parser;

    /**
     * Return mail parser
     *
     * @return Parser
     */
    private function getParser()
    {
        if (null === $this->parser) {
            $this->parser = new Parser;
            $this->fixUniqueHeaders();
            $this->parser->setText($this->toString());
        }
        return $this->parser;
    }

    /**
     * Return mail sent date
     *
     * @return string
     */
    public function getDate()
    {
        /** @var \Zend\Mail\Header\Date $date */
        $date = $this->getHeaders()->get('Date');
        return $date->getFieldValue();
    }

    /**
     * Return the message body
     *
     * @return string
     */
    public function getBody()
    {
        if ($this->getAttachments()) {
            try {
                return $this->getParser()->getMessageBody('html');
            } catch (\Throwable $exc) {
                error_log($exc);
            }
        }
        return parent::getBody();
    }

    /**
     * Return array of mail attachments
     *
     * @return \eXorus\PhpMimeMailParser\Attachment[]
     */
    public function getAttachments()
    {
        /** @var \eXorus\PhpMimeMailParser\Attachment[] $attachments */
        $attachments = $this->getParser()->getAttachments();
        return $attachments;
    }

    /**
     * Fixing headers uniqueness
     */
    private function fixUniqueHeaders()
    {
        $headers = $this->getHeaders();
        $headersCopy = clone $headers;
        $headers->clearHeaders();
        foreach ($headersCopy as $header) {
            $name = $header->getFieldName();
            $headers->has($name) or $headers->addHeader($header);
        }
    }

    /**
     * Create mail object from file
     *
     * @param string $path Mail file path
     * @return self
     */
    public static function fromFile($path)
    {
        /** @var self $message */
        $message = static::fromString(join(Headers::EOL, file($path, FILE_IGNORE_NEW_LINES)));
        return $message;
    }
}
