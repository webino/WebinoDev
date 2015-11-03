<?php
/**
 * Webino (http://webino.sk/)
 *
 * @link        https://github.com/webino/WebinoDev/ for the canonical source repository
 * @copyright   Copyright (c) 2014-2015 Webino, s. r. o. (http://webino.sk/)
 * @license     BSD-3-Clause
 */

namespace WebinoDev\Test;

use RuntimeException;

/**
 * Tests resources auto loader
 */
class Autoloader
{
    /**
     * @var string
     */
    protected $dir;

    /**
     * @var string
     */
    protected $namespace;

    /**
     * @param string $dir
     * @param string $namespace
     */
    public function __construct($dir, $namespace)
    {
        $this->dir       = (string) $dir;
        $this->namespace = (string) $namespace;
    }

    /**
     * @param object $loader Autoloader
     * @trows RuntimeException
     */
    public function __invoke($loader)
    {
        if (empty($loader)) {
            throw new RuntimeException('Unable to load. Run `php composer.phar install`.');
        }

        $loader->add('Application', $this->dir . '/src');
        $loader->add($this->namespace, $this->dir . '/src');
        $loader->add($this->namespace, $this->dir . '/../../src');
        $loader->add($this->namespace, $this->dir . '/../functional');
        $loader->add($this->namespace, $this->dir . '/../selenium');
        $loader->add($this->namespace, $this->dir . '/..');

        $this->initDevLoader();
    }

    /**
     * Initialize Webino-Devkit vendor autoloader
     */
    protected function initDevLoader()
    {
        $loader = @include '/var/lib/webino/php/vendor/autoload.php';
        if (empty($loader)) {
            throw new RuntimeException(
                'Unable to load the Webino-Devkit. Run `wget https://get.webino.org/devkit -qO - | sh`.'
            );
        }

        $loader->unregister();
        $loader->register(false);
    }
}
