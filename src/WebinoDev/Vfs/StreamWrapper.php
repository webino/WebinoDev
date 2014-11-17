<?php

namespace WebinoDev\Vfs;

use org\bovigo\vfs\vfsStream;
use org\bovigo\vfs\vfsStreamWrapper;

/**
 * Extended virtual filesystem stream wrapper
 */
class StreamWrapper extends vfsStreamWrapper
{
    /**
     * Unregister the virtual filesystem stream wrapper
     */
    public static function unregister()
    {
        self::$registered = false;
        stream_wrapper_unregister(vfsStream::SCHEME);
    }
}
