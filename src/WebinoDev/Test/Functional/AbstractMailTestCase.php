<?php
/**
 * Webino (http://webino.sk/)
 *
 * @link        https://github.com/webino/WebinoDev/ for the canonical source repository
 * @copyright   Copyright (c) 2014-2017 Webino, s. r. o. (http://webino.sk/)
 * @license     BSD-3-Clause
 */

namespace WebinoDev\Test\Functional;

/**
 * Base test case for mail functional tests
 */
abstract class AbstractMailTestCase extends \PHPUnit_Framework_TestCase
{
    use MailTrait;

    /**
     * {@inheritDoc}
     */
    protected function setUp()
    {
        $this->setUpMailVfs();
    }
}
