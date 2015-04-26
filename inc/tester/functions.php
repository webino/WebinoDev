<?php

use org\bovigo\vfs\vfsStream;
use org\bovigo\vfs\vfsStreamWrapper;
use Zend\Mvc\Application;

/**
 * Create a PHPUnit test case
 *
 * For mocking and legacy PHPUnit tests.
 *
 * @return \WebinoDev\Test\TestCase
 */
function createTestCase()
{
    return new \WebinoDev\Test\TestCase;
}

/**
 * Application factory
 */
function createApp() {
    /** @noinspection PhpIncludeInspection */
    return Application::init(require 'config/application.config.php');
}

/**
 * Create a virtual filesystem
 *
 * @param array $structure
 */
function createVfs(array $structure)
{
    vfsStreamWrapper::register();
    vfsStreamWrapper::setRoot(vfsStream::setup('root', null, $structure));
    set_include_path(vfsStream::url('root'));
}

/**
 * Create a temporary directory
 *
 * @return string
 */
function createTmpDir()
{
    $dir = __DIR__ . '/tmp/' . getmypid();
    // @ - directory may already exist
    @mkdir(dirname($dir));
    Tester\Helpers::purge($dir);
    return $dir;
}

/**
 * Return output buffer contents
 *
 * @param callable $callback
 * @return string
 */
function catchOutput(callable $callback)
{
    ob_start();
    call_user_func($callback);
    return trim(ob_get_clean());
}
