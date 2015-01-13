<?php
/**
 * Webino (http://webino.sk/)
 *
 * @link        https://github.com/webino/WebinoDev/ for the canonical source repository
 * @copyright   Copyright (c) 2014 Webino, s. r. o. (http://webino.sk/)
 * @license     BSD-3-Clause
 */

namespace WebinoDev\Mail;

use eXorus\PhpMimeMailParser\Parser;
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
            $this->parser->setText($this->toString());
        }
        return $this->parser;
    }

    /**
     * Return array of mail attachments
     *
     * @return \eXorus\PhpMimeMailParser\Attachment[]
     */
    public function getAttachments()
    {
        return $this->getParser()->getAttachments();
    }
}
