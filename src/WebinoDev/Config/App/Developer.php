<?php

namespace WebinoDev\Config\App;

/**
 * Application developer config
 */
class Developer
{
    /**
     * @param array $options
     * @return array
     */
    public function toArray(array $options = [])
    {
        return array_replace_recursive(
            $options,
            [
                'modules' => [
                    110 => 'WebinoDev',
                    130 => 'AssetManager',
                ],
                'module_listener_options' => [
                    'config_cache_enabled'     => false,
                    'module_map_cache_enabled' => false,
                    'check_dependencies'       => true,
                ],
            ]
        );
    }
}
