<?php

namespace WebinoDev\Config\App;

use WebinoDev\Assetic\Cache\FilesystemCache;
use WebinoDev\Factory\ProfilingAdapterFactory;
use Zend\Db\Adapter\Adapter;

/**
 * Application local config
 */
class Local
{
    /**
     * @var string
     */
    protected $dir;

    /**
     * @var array
     */
    protected $override = [];

    /**
     * @param string $dir
     * @param array $override
     */
    public function __construct($dir, array $override = [])
    {
        $this->dir      = $dir;
        $this->override = $override;
    }

    /**
     * @return array
     */
    public function toArray()
    {
        return array_replace_recursive(
            [
                'service_manager' => [
                    'factories' => [Adapter::class => ProfilingAdapterFactory::class],
                ],
                'view_manager' => [
                    'display_not_found_reason' => true,
                    'display_exceptions'       => true,
                ],
                'asset_manager' => [
                    'caching' => [
                        'default' => [
                            'cache'   => 'FilePath',
                            'options' => ['dir' => $this->dir . '/../../public'],
                        ],
                        'favicon.ico' => [
                            'cache'   => FilesystemCache::class,
                            'options' => ['dir' => 'tmp/cache/common/assets'],
                        ],
                    ],
                ],
            ],
            $this->override
        );
    }
}
