<?php
/**
 * Webino (http://webino.sk/)
 *
 * @link        https://github.com/webino/WebinoDev/ for the canonical source repository
 * @copyright   Copyright (c) 2014-2015 Webino, s. r. o. (http://webino.sk/)
 * @license     BSD-3-Clause
 */

namespace WebinoDev\Tester;

use Tester\Environment;

/**
 * Nette tester bootstrap
 */
class Bootstrap
{
    /**
     * @var string
     */
    protected $dir;

    /**
     * @param string $dir
     */
    public function __construct($dir)
    {
        $this->dir = (string)$dir;
    }

    /**
     * Setup tester environment
     */
    public function __invoke()
    {
        chdir($this->resolveRoot());
        Environment::setup();
        ini_set('date.timezone', 'Europe/Bratislava');
    }

    protected function resolveRoot()
    {
        $dir  = $this->dir . '/../../._test/';
        $zend = $dir . 'ZendSkeletonApplication';
        return file_exists($zend) ? $zend : $dir . 'WebinoSkeletonApplication';
    }
}
