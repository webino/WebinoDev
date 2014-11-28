<?php
/**
 * Webino (http://webino.sk/)
 *
 * @link        https://github.com/webino/WebinoDev/ for the canonical source repository
 * @copyright   Copyright (c) 2014 Webino, s. r. o. (http://webino.sk/)
 * @license     BSD-3-Clause
 */

namespace WebinoDev\Test\Selenium;

use Yandex\Allure\Adapter\Support\AttachmentSupport;

/**
 * Capture test screenshots
 */
trait ScreenshotTrait
{
    use AttachmentSupport;

    /**
     * @return string
     * @todo phppmd issue https://github.com/phpmd/phpmd/issues/153
     */
    //abstract protected function getBrowser();

    /**
     * @return \PHPWebDriver_WebDriverSession
     * @todo phppmd issue https://github.com/phpmd/phpmd/issues/153
     */
    //abstract protected function getSession();

    /**
     * @param string $caption
     * @return self
     */
    protected function screenshot()
    {
        if ('htmlunit' === $this->getBrowser()) {
            return null;
        }

        return base64_decode($this->getSession()->screenshot());
    }

    /**
     * @param string $caption
     * @return self
     */
    protected function attachScreenshot($caption = '')
    {
        $data = $this->screenshot();
        if (empty($data)) {
            return $this;
        }

        $path = sys_get_temp_dir() . '/' . md5(__METHOD__) . '.png';
        file_put_contents($path, $data);
        $this->addAttachment($path, $caption, 'png');

        return $this;
    }
}