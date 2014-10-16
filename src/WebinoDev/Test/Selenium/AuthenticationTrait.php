<?php

namespace WebinoDev\Test\Selenium;

use PHPWebDriver_WebDriverBy as By;
use PHPWebDriver_WebDriverWait as Wait;
use RuntimeException;

/**
 *
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
     * Login input CSS selector
     *
     * @var string
     */
    protected $identityName = 'identity';

    /**
     * Password input CSS selector
     *
     * @var string
     */
    protected $creadentialName = 'credential';

    /**
     * CSS selector of element to assert after successful authentication
     *
     * @var string
     */
    protected $authenticatedCssSelector;

    /**
     * Called on element after successful authnetication, if set
     *
     * @var callable
     */
    protected $authenticatedCallback;

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

        return $identity;
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
        }

        return $credential;
    }

    /**
     * @return string
     * @throws RuntimeException Use setAuthenticatedCssSelector() first
     */
    protected function getAuthenticatedCssSelector()
    {
        if (empty($this->authenticatedCssSelector)) {
            throw new RuntimeException('You have to call setAuthenticatedCssSelector() first');
        }
        return $this->authenticatedCssSelector;
    }

    /**
     * Set login for authentication
     *
     * @param string $identity
     * @return self
     */
    public function setIdentity($identity)
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
    public function setCredential($credential)
    {
        $this->credential = (string) $credential;
        return $this;
    }

    /**
     * @param string $identityName
     * @return self
     */
    protected function setIdentityCssSelector($identityName)
    {
        $this->identityName = (string) $identityName;
        return $this;
    }

    /**
     * @param string $creadentialName
     * @return self
     */
    protected function setCreadentialCssSelector($creadentialName)
    {
        $this->creadentialName = (string) $creadentialName;
        return $this;
    }

    /**
     * @param string $authenticatedCssSelector
     * @return self
     */
    protected function setAuthenticatedCssSelector($authenticatedCssSelector)
    {
        $this->authenticatedCssSelector = (string) $authenticatedCssSelector;
        return $this;
    }

    /**
     * @param callable $authenticatedCallback
     * @return self
     */
    public function setAuthenticatedCallback(callable $authenticatedCallback)
    {
        $this->authenticatedCallback = $authenticatedCallback;
        return $this;
    }

    /**
     * Authenticate and check for success
     *
     * @return self
     */
    protected function authenticate()
    {
        $this
            ->enterIdentity()
            ->enterCredential(function ($elm) {
                $elm->submit();
            })
            ->waitToBeAuthenticated($this->authenticatedCallback);

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
        $elm = $this->session->element(By::NAME, $this->identityName);
        $elm->sendKeys($this->getIdentity());
        !$callback or call_user_func($callback, $elm);
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
        $elm = $this->session->element(By::NAME, $this->creadentialName);
        $elm->sendKeys($this->getCredential());
        !$callback or call_user_func($callback, $elm);
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
        $elm = (new Wait($this->session))->until(
            function () {
                 return $this->session->element(By::CSS_SELECTOR, $this->getAuthenticatedCssSelector());
            }
        );

        !$callback or call_user_func($callback, $elm);
        return $this;
    }
}
