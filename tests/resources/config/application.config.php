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

/**
 * Test application config
 */
return [
    'modules' => [
        'Application',
        // Module is added as last
        // for test purposes only
        'WebinoDev',
    ],
    'module_listener_options' => [
        'cache_dir'                => 'data/cache',
        'config_cache_enabled'     => false,
        'module_map_cache_enabled' => false,
        'check_dependencies'       => false,

        'module_paths' => [
            'module',
            'vendor',
        ],
        'config_glob_paths' => [
            'config/autoload/{,*.}{global,local}.php',
        ],
        'config_static_paths' => [
            __DIR__ . '/module.config.php',
        ],
    ],
];
