<?php

namespace WebinoDev\Config\App;

use BjyProfiler\Db\Adapter\ProfilingAdapter;
use BjyProfiler\Db\Profiler\Profiler;
use WebinoDev\Assetic\Cache\FilesystemCache;
use ZendDeveloperTools\Collector\DbCollector;

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
                'di' => [
                    'instance' => [
                        'alias' => [
                            'dbProfiler' => Profiler::class,
                        ],
                        Profiler::class    => ['parameters' => ['enabled' => 'true']],
                        DbCollector::class => ['parameters' => ['profiler' => 'dbProfiler']],
                    ],
                ],
                'service_manager' => [
                    'factories' => [
                        'defaultDb' => function ($services) {
                            $config = $services->get('Config')['db'];
                            if (empty($config)) {
                                return null;
                            }

                            $profiler = $services->get('dbProfiler');
                            if (class_exists(ProfilingAdapter::class)) {
                                $adapter = new ProfilingAdapter($config);
                                $adapter->setProfiler($profiler);
                                $adapter->injectProfilingStatementPrototype();
                            } else {
                                $adapter = new Adapter($config);
                            }
                            return $adapter;
                        },
                    ],
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
