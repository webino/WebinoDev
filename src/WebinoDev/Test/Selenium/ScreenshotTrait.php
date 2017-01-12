<?php
/**
 * Webino (http://webino.sk/)
 *
 * @link        https://github.com/webino/WebinoDev/ for the canonical source repository
 * @copyright   Copyright (c) 2014-2017 Webino, s. r. o. (http://webino.sk/)
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
     */
    abstract protected function getBrowser();

    /**
     * @return \PHPWebDriver_WebDriverSession|WebDriver\SessionInterface
     */
    abstract protected function getSession();

    /**
     * @return string
     */
    protected function screenshot()
    {
        if ('htmlunit' === $this->getBrowser()) {
            return '';
        }

        return base64_decode($this->getSession()->screenshot());
    }

    /**
     * @param string|null $caption
     * @return $this
     */
    protected function takeScreenshot($caption = null)
    {
        $data = $this->screenshot();
        if (empty($data)) {
            return $this;
        }

        $path = sys_get_temp_dir() . '/' . md5(__METHOD__) . '.png';
        file_put_contents($path, $data);
        $this->addAttachment($path, $caption, 'image/png');

        return $this;
    }

    /**
     * @param string|null $caption
     * @return ScreenshotTrait
     * @todo remove
     * @deprecated use takeScreenshot()
     */
    protected function attachScreenshot($caption = null)
    {
        return $this->takeScreenshot($caption);
    }
}
