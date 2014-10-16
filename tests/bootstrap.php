<?php

namespace WebinoDev\Test;

use Zend\Mvc\Application;

chdir(__DIR__);

/**
 * Initialize test resources autoloader
 */
require __DIR__ . '/resources/init_autoloader.php';

/**
 * Application factory
 */
function createApp() {
    chdir(__DIR__ . '/../._test/ZendSkeletonApplication');
    require_once 'init_autoloader.php';
    return Application::init(require 'config/application.config.php');
}
