<?php
/**
 * Webino (http://webino.sk/)
 *
 * @link        https://github.com/webino/WebinoDev/ for the canonical source repository
 * @copyright   Copyright (c) 2014-2017 Webino, s. r. o. (http://webino.sk/)
 * @license     BSD-3-Clause
 */

namespace WebinoDev;

use Zend\ModuleManager\Feature\ConfigProviderInterface;

/**
 * WebinoDev module for Zend Framework 2
 */
class Module implements ConfigProviderInterface
{
    /**
     * @returns array
     */
    public function getConfig()
    {
        return require __DIR__ . '/../../config/module.config.php';
    }
}
