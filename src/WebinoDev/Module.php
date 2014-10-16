<?php

namespace WebinoDev;

/**
 * WebinoDev module for Zend Framework 2
 */
class Module
{
    /**
     * Module initialization
     */
    public function onInit()
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
