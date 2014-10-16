<?php

namespace WebinoDeb\Test;

use RuntimeException;

/**
 * Initialize vendor autoloader
 */
$loader = @include __DIR__ . '/../../vendor/autoload.php';
if (empty($loader)) {
    throw new RuntimeException('Unable to load. Run `php composer.phar install`.');
}

$loader->add('Application', __DIR__ . '/src');
$loader->add('WebinoDev', __DIR__ . '/src');
$loader->add('WebinoDev', __DIR__ . '/../../src');
$loader->add('WebinoDev', __DIR__ . '/..');
