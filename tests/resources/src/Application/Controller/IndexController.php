<?php
/**
 * Webino (http://webino.sk/)
 *
 * @link        https://github.com/webino/WebinoDev/ for the canonical source repository
 * @copyright   Copyright (c) 2014 Webino, s. r. o. (http://webino.sk/)
 * @license     BSD-3-Clause
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;

/**
 * Test application controller
 */
class IndexController extends AbstractActionController
{
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
}
