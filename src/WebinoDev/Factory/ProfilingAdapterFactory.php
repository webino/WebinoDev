<?php

namespace WebinoDev\Factory;

use BjyProfiler\Db\Adapter\ProfilingAdapter;
use BjyProfiler\Db\Profiler\LoggingProfiler;
use BjyProfiler\Db\Profiler\Profiler;
use Zend\Db\Adapter\Adapter;
use Zend\Log;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

/**
 * Class ProfilingAdapterFactory
 */
class ProfilingAdapterFactory implements FactoryInterface
{
    /**
     * @param ServiceLocatorInterface $services
     * @return ProfilingAdapter|bool|Adapter
     */
    public function createService(ServiceLocatorInterface $services)
    {
        $config = $services->get('Config');
        if (empty($config['db'])) {
            return false;
        }

        if (!class_exists(ProfilingAdapter::class)) {
            return new Adapter($config['db']);
        }

        $adapter = new ProfilingAdapter($config['db']);
        $adapter->setProfiler($this->createProfiler());
        $adapter->injectProfilingStatementPrototype(!empty($config['db']['options']) ? $config['db'] : []);
        return $adapter;
    }

    /**
     * @return Profiler|LoggingProfiler
     */
    protected function createProfiler()
    {
        if ('cli' === PHP_SAPI) {
            // In CLI mode write queries
            // profiling info to stdout
            $logger = new Log\Logger;
            $logger->addWriter(new Log\Writer\Stream('php://output'), Log\Logger::DEBUG);
            return new LoggingProfiler($logger);
        }

        return new Profiler;
    }
}
