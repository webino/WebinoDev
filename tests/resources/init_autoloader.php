<?php
/**
 * Webino (http://webino.sk/)
 *
 * @link        https://github.com/webino/WebinoDev/ for the canonical source repository
 * @copyright   Copyright (c) 2014-2015 Webino, s. r. o. (http://webino.sk/)
 * @license     BSD-3-Clause
 */

namespace WebinoDev;

use RuntimeException;

/**
 * Initialize vendor autoloader
 */
$loader = @include __DIR__ . '/../../vendor/autoload.php';
if (empty($loader)) {
    throw new RuntimeException('Unable to load. Run `php composer.phar install`.');
}

$loader->add('Application', __DIR__ . '/src');
$loader->add(__NAMESPACE__, __DIR__ . '/src');
$loader->add(__NAMESPACE__, __DIR__ . '/../../src');
$loader->add(__NAMESPACE__, __DIR__ . '/../functional');
$loader->add(__NAMESPACE__, __DIR__ . '/../selenium');
$loader->add(__NAMESPACE__, __DIR__ . '/..');
