<?php
/**
 * Webino (http://webino.sk/)
 *
 * @link        https://github.com/webino/WebinoDev/ for the canonical source repository
 * @copyright   Copyright (c) 2014-2017 Webino, s. r. o. (http://webino.sk/)
 * @license     BSD-3-Clause
 */

/**
 * Alias for var_dump()
 *
 * @param mixed $subject
 */
function d($subject) {
    var_dump($subject);
}

/**
 * Diyng var_dump()
 *
 * @param mixed $subject
 */
function dd($subject) {
    var_dump($subject);
    exit;
}

/**
 * Alias for print_r() scream
 *
 * @param mixed $subject
 */
function p($subject) {
    print_r($subject);
}

/**
 * Dying print_r() scream
 *
 * @param mixed $subject
 */
function pd($subject) {
    print_r($subject);
    exit;
}

/**
 * Alias for print_r() return
 *
 * @param mixed $subject
 * @return string
 */
function pr($subject) {
    return print_r($subject, true);
}

/**
 * Web debugger break point
 *
 * Sometimes is useful by throwing an exception to check a backtrace.
 *
 * @link https://github.com/webino/WebinoDebug Web debugger
 * @param string $msg
 */
function e($msg = '') {
    throw new \WebinoDev\Exception\DevelopmentException($msg);
}

/**
 * For testing purposes only
 *
 * @return bool
 */
function isSelenium()
{
    return file_exists('tmp/common/selenium.lock');
}
