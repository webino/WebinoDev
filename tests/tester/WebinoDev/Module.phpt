<?php
/**
 * Webino (http://webino.sk/)
 *
 * @link        https://github.com/webino/WebinoDev/ for the canonical source repository
 * @copyright   Copyright (c) 2014-2017  Webino, s. r. o. (http://webino.sk/)
 * @license     BSD-3-Clause
 */

use Tester\Assert;
use WebinoDev\Module;

require __DIR__ . '/../bootstrap.php';


$module = new Module;
$config = $module->getConfig();

Assert::true(is_array($config));
Assert::true(function_exists('p'));
Assert::true(function_exists('pd'));
Assert::true(function_exists('d'));
Assert::true(function_exists('dd'));
