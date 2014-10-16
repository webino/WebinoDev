#!/usr/bin/env php
<?php

namespace WebinoDev;

use WebinoDev\Di\Definition\Generator;

// Autoloader
$loader = require __DIR__ . '/../vendor/autoload.php';
$loader->add(__NAMESPACE__, __DIR__ . '/../src');

// Dump DI definition
(new Generator(__DIR__))->compile()->dump();
