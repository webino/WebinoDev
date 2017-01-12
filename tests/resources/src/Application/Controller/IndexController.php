<?php
/**
 * Webino (http://webino.sk/)
 *
 * @link        https://github.com/webino/WebinoDev/ for the canonical source repository
 * @copyright   Copyright (c) 2014-2017 Webino, s. r. o. (http://webino.sk/)
 * @license     BSD-3-Clause
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;

/**
 * Testing application controller
 */
class IndexController extends AbstractActionController
{
    /**
     * Testing view
     */
    public function testAction()
    {
    }

    /**
     * Authentication form
     */
    public function authenticationAction()
    {
    }

    /**
     * Failed authentication
     */
    public function authenticationFailAction()
    {
    }

    /**
     * Successful authentication
     */
    public function authenticationSuccessAction()
    {
        $params     = $this->params();
        $identity   = $params->fromPost('identity');
        $credential = $params->fromPost('credential');

        if (empty($identity) || empty($credential)) {
            return $this->redirect()->toRoute(
                'application/default',
                ['controller' => 'index', 'action' => 'authentication-fail']
            );
        }
    }

    /**
     * Ajax test view
     */
    public function ajaxAction()
    {
    }

    /**
     * Wait for a while then return text response
     */
    public function ajaxContentAction()
    {
        sleep(2);
        return $this->getResponse()->setContent('AJAX TEST');
    }

    /**
     * Raw source
     */
    public function rawSourceAction()
    {
        $sessions = $this->getServiceLocator()->get('Zend\Session\SessionManager');
        $sessions->start();
        return $this->getResponse()->setContent($sessions->getId());
    }
}
