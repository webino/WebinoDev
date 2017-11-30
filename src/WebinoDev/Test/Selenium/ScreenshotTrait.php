<?php
/**
 * Webino (http://webino.sk/)
 *
 * @link        https://github.com/webino/WebinoDev/ for the canonical source repository
 * @copyright   Copyright (c) 2014-2017 Webino, s. r. o. (http://webino.sk/)
 * @license     BSD-3-Clause
 */

namespace WebinoDev\Test\Selenium;

/**
 * Capture test screenshots
 */
trait ScreenshotTrait
{
    /**
     * Taken screenshots directory
     *
     * @var string
     */
    protected $screenshotsDir;

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
     * @param string|null $imgName
     * @return $this
     */
    protected function takeScreenshot($imgName = null)
    {
        $data = $this->screenshot();
        if (empty($data)) {
            return $this;
        }

        if (empty($this->screenshotsDir) || !file_exists($this->screenshotsDir)) {
            return $this;
        }

        if (empty($imgName)) {
            $imgName = count(glob($this->screenshotsDir . '/*.png')) + 1;
        }

        $path = $this->screenshotsDir . '/' . $imgName . '.png';
        file_put_contents($path, $data);

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
