<?php
/**
 * Webino (http://webino.sk/)
 *
 * @link        https://github.com/webino/WebinoDev/ for the canonical source repository
 * @copyright   Copyright (c) 2014 Webino, s. r. o. (http://webino.sk/)
 * @license     BSD-3-Clause
 */

namespace WebinoDev;

/**
 * Tests config
 */
return [
    'view_manager' => [
        'template_map' => [
            'application/index/ajax'                   => __DIR__ . '/../view/application/index/ajax.phtml',
            'application/index/authentication'         => __DIR__ . '/../view/application/index/authentication.phtml',
            'application/index/authentication-success' => __DIR__ . '/../view/application/index/authentication-success.phtml',
            'application/index/authentication-fail'    => __DIR__ . '/../view/application/index/authentication-fail.phtml',
        ],
    ],
];
