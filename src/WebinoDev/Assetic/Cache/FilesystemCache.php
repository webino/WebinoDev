<?php

namespace WebinoDev\Assetic\Cache;

use Assetic\Cache\FilesystemCache as BaseFilesystemCache;

/**
 * Class FilesystemCache
 *
 * Fixes asset manager cached files permission issues.
 * @todo https://github.com/RWOverdijk/AssetManager/issues/178
 */
final class FilesystemCache extends BaseFilesystemCache
{
    /**
     * {@inheritdoc}
     */
    public function set($key, $value)
    {
        $umask = umask(0);
        parent::set($key, $value);
        umask($umask);
    }
}
