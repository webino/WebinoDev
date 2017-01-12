<?php
/**
 * Webino (http://webino.sk/)
 *
 * @link        https://github.com/webino/WebinoDev/ for the canonical source repository
 * @copyright   Copyright (c) 2017 Webino, s. r. o. (http://webino.sk/)
 * @license     BSD-3-Clause
 */

namespace WebinoDev\Test\Selenium;

/**
 * Raise client-side notifications
 */
trait NotifyTrait
{
    /**
     * @param bool $withDataSet
     * @return string
     */
    abstract public function getName($withDataSet = true);

    /**
     * @return \PHPWebDriver_WebDriverSession
     */
    abstract protected function getSession();

    /**
     * @param string $msg
     * @return $this
     */
    protected function notifyInfo($msg)
    {
        $this->debugNotify($msg, 5000);
        return $this;
    }

    /**
     * @param string $msg
     * @return $this
     */
    protected function notifyError($msg)
    {
        $this->debugNotify($msg, 5000, 'error');
        return $this;
    }

    /**
     * @param string $msg
     * @param int $timeout
     * @param string $type
     * @return $this
     */
    protected function debugNotify($msg, $timeout = 2000, $type = 'info')
    {
        $title = get_class($this) . '::' . $this->getName(false);
        $msg   = trim(addslashes(preg_replace('~[[:space:]]+~', ' ', nl2br($msg))));
        $args  = '"' . $title . '", "' . $msg . '", ' . $timeout . ', "' . $type . '"';
        $cmd   = '("function" === typeof _debugNotify) && _debugNotify(' . $args . ');';

        $this->getSession()->execute(['script' => $cmd, 'args' => []]);
        sleep($timeout / 1000);
        return $this;
    }
}
