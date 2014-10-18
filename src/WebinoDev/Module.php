<?php
/**
 * Webino (http://webino.sk/)
 *
 * @link        https://github.com/webino/WebinoDev/ for the canonical source repository
 * @copyright   Copyright (c) 2014 Webino, s. r. o. (http://webino.sk/)
 * @license     BSD-3-Clause
 */

namespace WebinoDev;

/**
 * WebinoDev module for Zend Framework 2
 */
class Module
{
    /**
     * Module initialization
     */
    public function init()
    {
        require_once __DIR__ . '/../../inc/functions.php';
    }

    /**
     * @returns array
     */
    public function getConfig()
    {
        return require __DIR__ . '/../../config/module.config.php';
    }
}
