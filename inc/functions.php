<?php

/**
 * Alias for var_dump()
 *
 * @param mixed $subject
 */
function d($subject) {
    var_dump($subject);
}

/**
 * Diyng dump
 *
 * @param mixed $subject
 */
function dd($subject) {
    var_dump($subject);
    exit;
}
