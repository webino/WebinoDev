<?php
/**
 * Webino (http://webino.sk/)
 *
 * @link        https://github.com/webino/WebinoDev/ for the canonical source repository
 * @copyright   Copyright (c) 2012-2019 Webino, s. r. o. (http://webino.sk/)
 * @license     BSD-3-Clause
 */

namespace WebinoDev\Test;

/**
 * AppAwareTrait
 */
trait AppAwareTrait
{
    /**
     * @var \Zend\Mvc\Application|null
     */
    protected $app;

    /**
     * @return \Zend\Mvc\Application|null
     */
    public function getApp()
    {
        if (!$this->app && function_exists('createApp')) {
            $this->app = createApp();
        }
        return $this->app;
    }
}
