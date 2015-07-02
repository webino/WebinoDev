<?php

namespace WebinoDev\Assetic\Cache;

use Assetic\Cache\FilesystemCache as BaseFilesystemCache;
use Symfony\Component\Filesystem\Filesystem;

/**
 * Class FilesystemCache
 *
 * Fixes asset manager cached files group permission issues.
 */
final class FilesystemCache extends BaseFilesystemCache
{
    /**
     * File mode
     */
    const MODE = 02770;

    /**
     * @var string
     */
    private $dir;

    /**
     * @var Filesystem
     */
    private $fs;

    /**
     * {@inheritdoc}
     */
    public function __construct($dir)
    {
        parent::__construct($dir);
        $this->dir = $dir;
        $this->fs = new Filesystem;
    }

    /**
     * {@inheritdoc}
     */
    public function set($key, $value)
    {
        parent::set($key, $value);
        $this->fs->chmod($this->dir, self::MODE, 0000, true);
    }
}
