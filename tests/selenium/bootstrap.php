<?php

namespace WebinoDev\Test;

use RuntimeException;

chdir(__DIR__);

$loader = @include __DIR__ . '/../../vendor/autoload.php';
if (empty($loader)) {
    throw new RuntimeException('Unable to load. Run `php composer.phar install`.');
}

$loader->add('WebinoDev', __DIR__);
