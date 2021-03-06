<?php
/**
 * Webino (http://webino.sk/)
 *
 * @link        https://github.com/webino/WebinoDev/ for the canonical source repository
 * @copyright   Copyright (c) 2014-2018 Webino, s. r. o. (http://webino.sk/)
 * @license     BSD-3-Clause
 */

namespace WebinoDev\Test\Selenium;

use Exception;
use PHPWebDriver_WebDriver;
use RuntimeException;

/**
 * Base test case for Selenium WebDriver tests
 */
abstract class AbstractTestCase extends \PHPUnit_Framework_TestCase
{
    use WebTrait;
    use WaitTrait;
    use ClickTrait;
    use InputTrait;
    use NotifyTrait;
    use WindowTrait;
    use ElementTrait;
    use ElementsTrait;
    use ScreenshotTrait;

    /**
     * Selenium Web Driver host URI
     *
     * @var string
     */
    protected static $webDriverHost = 'http://localhost:%s/wd/hub';

    /**
     * Selenium Web Driver port
     *
     * @var string
     */
    protected static $webDriverPort = '4444';

    /**
     * @var string
     */
    protected static $webDriverBrowser = 'firefox';

    /**
     * @var string
     */
    protected static $webDriverScreen = '1920x1080';

    /**
     * @var string
     */
    protected $browser;

    /**
     * @var string
     */
    protected $browserBin;

    /**
     * @var string
     */
    protected $uri;

    /**
     * @var PHPWebDriver_WebDriver
     */
    protected $webDriver;

    /**
     * @var \PHPWebDriver_WebDriverSession|WebDriver\SessionInterface
     */
    protected $session;

    /**
     * Resolves URI to open session
     */
    protected function setUp()
    {
        $this->uri       = $this->resolveUri();
        $this->webDriver = new PHPWebDriver_WebDriver($this->resolveHost());
        $this->session   = $this->webDriver->session($this->resolveBrowser(), $this->resolveCapabilities());

        $this->session->window()->postSize($this->resolveWindowSize());
    }

    /**
     * @return void
     */
    protected function tearDown()
    {
        $this->hasFailed() or $this->session->close();
    }

    /**
     * @param Exception $exc
     */
    protected function onNotSuccessfulTest(Exception $exc)
    {
        $this->notifyError($exc);
        $this->session and $this->session->close();
        parent::onNotSuccessfulTest($exc);
    }

    /**
     * @return \PHPWebDriver_WebDriverSession|WebDriver\SessionInterface
     */
    public function getSession()
    {
        return $this->session;
    }

    /**
     * @param \PHPWebDriver_WebDriverSession|WebDriver\SessionInterface $session
     * @return $this
     */
    public function setSession($session)
    {
        $this->session = $session;
        return $this;
    }

    /**
     * @return string
     */
    protected function getBrowser()
    {
        return $this->browser ? $this->browser : $this::$webDriverBrowser;
    }

    /**
     * @return string
     */
    protected function getBrowserBin()
    {
        return $this->browserBin;
    }

    /**
     * @param string $bin
     * @return string
     */
    protected function setBrowserBin($bin)
    {
        $this->browserBin = (string) $bin;
        return $this;
    }

    /**
     * Resolve Selenium WebDriver host
     *
     * @return string
     */
    protected function resolveHost()
    {
        $host = getenv('HOST');
        empty($host) and $host = $this::$webDriverHost;
        return sprintf($host, $this->resolvePort());
    }

    /**
     * Resolve Selenium WebDriver port
     *
     * @return string
     */
    protected function resolvePort()
    {
        $port = getenv('PORT');
        empty($port) and $port = $this::$webDriverPort;
        return $port;
    }

    /**
     * Resolve test target URI
     *
     * @return string
     */
    protected function resolveUri()
    {
        $uri = getenv('URI');
        if (empty($uri)) {
            throw new RuntimeException('Expected URI env');
        }
        return $uri;
    }

    /**
     * Resolve test session browser
     *
     * @return string
     */
    protected function resolveBrowser()
    {
        $browser = getenv('BROWSER');
        empty($browser) and $browser = $this::$webDriverBrowser;

        switch ($browser) {
            case 'chromium':
                $browser = 'chrome';
                $this->setBrowserBin('/usr/bin/chromium-browser');
                break;
            case 'firefox':
                $this->setBrowserBin('/var/lib/webino/firefox/firefox');
                break;
        }

        return $this->browser = $browser;
    }

    /**
     * @return array
     */
    protected function resolveWindowSize()
    {
        $screen = getenv('SCREEN');
        empty($screen) and $screen = $this::$webDriverScreen;
        $size = explode('x', $screen);
        return ['width' => (int) $size[0], 'height' => (int) $size[1]];
    }

    /**
     * Resolve test session capabilities
     *
     * @return array
     */
    protected function resolveCapabilities()
    {
        switch ($this->getBrowser()) {
            case 'chrome':
                // Fixes OpenVZ
                $opts = ['args' => ['no-sandbox', 'start-maximized']];
                $bin  = $this->getBrowserBin();
                $bin and $opts+= ['binary' => $bin];
                return ['chromeOptions' => $opts];
            case 'firefox':
                $opts = [];
                $bin  = $this->getBrowserBin();
                $bin and $opts+= ['firefox_binary' => $bin];
                return $opts;
        }
        return [];
    }
}
