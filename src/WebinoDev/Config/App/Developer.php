<?php

namespace WebinoDev\Config\App;

/**
 * Application developer config
 */
class Developer
{
    /**
     * @var array
     */
    protected $options = [];

    /**
     * @param array|object $options
     */
    public function __construct($options)
    {
        $this->options = is_object($options) ? $options->toArray() : $options;
    }

    /**
     * @return array
     */
    public function toArray()
    {
        return array_replace_recursive(
            $this->options,
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
                'webino_debug' => [
                    'enabled' => 'cli' !== PHP_SAPI,
                    'mode'    => false,
                    'bar'     => true,
                ],
            ]
        );
    }
}
