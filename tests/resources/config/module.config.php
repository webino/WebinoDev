<?php
/**
 * Webino (http://webino.sk)
 *
 * @link        https://bitbucket.org/webino/webinodev for the canonical source repository
 * @copyright   Copyright (c) 2014 Webino, s. r. o. (http://webino.sk)
 * @author      Peter Bacinsky <peter@bacinsky.sk>
 * @license     proprietary
 */

namespace WebinoDev;

return [
    'view_manager' => [
        'template_map' => [
            'application/index/authentication'         => __DIR__ . '/../view/application/index/authentication.phtml',
            'application/index/authentication-success' => __DIR__ . '/../view/application/index/authentication-success.phtml',
            'application/index/authentication-fail'    => __DIR__ . '/../view/application/index/authentication-fail.phtml',
        ],
    ],
];
