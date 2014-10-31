<?php
/**
 * Webino (http://webino.sk/)
 *
 * @link        https://github.com/webino/WebinoDev/ for the canonical source repository
 * @copyright   Copyright (c) 2014 Webino, s. r. o. (http://webino.sk/)
 * @license     BSD-3-Clause
 */

namespace WebinoDev\Test\Selenium;

use PHPWebDriver_WebDriverBy as By;
use RuntimeException;

/**
 * WebDriver test authentication trait
 *
 * Use this trait when you want a WebDriver test authentication handling.
 */
trait AuthenticationTrait
{
    /**
     * Key to resolve identity from an environment
     */
    public static $identityEnv = 'IDENTITY';

    /**
     * Key to resolve credential from an environment
     */
    public static $credentialEnv = 'CREDENTIAL';

    /**
     * Login
     *
     * @var string
     */
    protected $identity;

    /**
     * Password
     */
    protected $credential;

    /**
     * Login input name
     *
     * @var string
     */
    public $identityName = 'identity';

    /**
     * Password input name
     *
     * @var string
     */
    public $credentialName = 'credential';

    /**
     * CSS selector of element to assert after successful authentication
     *
     * @var string
     */
    protected $authSuccessLocator;

    /**
     * Enters the input value
     *
     * @param string $name
     * @param string $value
     * @param callable $callback
     * @return self
     */
    abstract protected function enterInput($name, $value, callable $callback = null);

    /**
     * Wait for something, then do something else
     *
     * @param callable $action
     * @param callable $callback
     * @return self
     */
    abstract protected function waitFor(callable $action, callable $callback = null);

    /**
     * Resolve test identity from an environment variable
     *
     * @return string
     */
    protected function getIdentity()
    {
        if (!$this->identity) {
            $identity = getenv($this::$identityEnv);
            if (empty($identity)) {
                throw new RuntimeException(sprintf('Expected %s env', $this::$identityEnv));
            }
            $this->setIdentity($identity);
        }

        return $this->identity;
    }

    /**
     * Resolve test credential from an environment variable
     *
     * @return string
     */
    protected function getCredential()
    {
        if (!$this->credential) {
            $credential = getenv($this::$credentialEnv);
            if (empty($credential)) {
                throw new RuntimeException(sprintf('Expected %s env', $this::$credentialEnv));
            }
            $this->setCredential($credential);
        }

        return $this->credential;
    }

    /**
     * @return string
     * @throws RuntimeException Use setAuthSuccessLocator() first
     */
    protected function getAuthSuccessLocator()
    {
        if (empty($this->authSuccessLocator)) {
            throw new RuntimeException('You have to call setAuthSuccessLocator() first');
        }
        return $this->authSuccessLocator;
    }

    /**
     * Set login for authentication
     *
     * @param string $identity
     * @return self
     */
    protected function setIdentity($identity)
    {
        $this->identity = (string) $identity;
        return $this;
    }

    /**
     * Set password for authentication
     *
     * @param string $credential
     * @return self
     */
    protected function setCredential($credential)
    {
        $this->credential = (string) $credential;
        return $this;
    }

    /**
     * @param string $locator CSS selector
     * @return self
     */
    protected function setAuthSuccessLocator($locator)
    {
        $this->authSuccessLocator = (string) $locator;
        return $this;
    }

    /**
     * Authenticate and check for success
     *
     * @return self
     */
    protected function authenticate(callable $callback = null)
    {
        $this
            ->enterIdentity()
            ->enterCredential(function ($elm) {
                $elm->submit();
            })
            ->waitToBeAuthenticated($callback);

        return $this;
    }

    /**
     * Enters the password into input
     *
     * @param callable $callback
     * @return self
     */
    protected function enterIdentity(callable $callback = null)
    {
        $this->enterInput($this->identityName, $this->getIdentity(), $callback);
        return $this;
    }

    /**
     * Enters the password into input
     *
     * @param callable $callback
     * @return self
     */
    protected function enterCredential(callable $callback = null)
    {
        $this->enterInput($this->credentialName, $this->getCredential(), $callback);
        return $this;
    }

    /**
     * Check that we are authenticated successfuly
     *
     * @param callable $callback
     * @return self
     */
    protected function waitToBeAuthenticated(callable $callback = null)
    {
        $this->waitFor(
            function () {
                 return $this->elementByCssSelector($this->getAuthSuccessLocator());
            },
            $callback
        );
        return $this;
    }
}
