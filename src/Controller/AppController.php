<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link      http://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\Event;

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link http://book.cakephp.org/3.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller
{

    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * e.g. `$this->loadComponent('Security');`
     *
     * @return void
     */
    public function initialize()
    {
        parent::initialize();

        $this->loadComponent('RequestHandler');
        $this->loadComponent('Flash');

//        $this->loadComponent('Auth', [
//            'authenticate' => [
//                'Form' => [
//                    'fields' => [
//                        'username' => 'email',
//                        'password' => 'password'
//                    ]
//                ]
//            ],
//            'loginAction' => [
//                'controller' => 'Users',
//                'action' => 'login'
//            ],
//            'unauthorizedRedirect' => $this->referer() // If unauthorized, return them to page they were just on
//        ]);
//
//        // Allow the display action so our pages controller
//        // continues to work.
//        $this->Auth->allow(['display']);
//        $this->loadComponent('Auth', [
//        'loginAction' => [
//            'controller' => 'BidUsers',
//            'action' => 'login',
//            'plugin' => 'BidUsers'
//        ],
//        'authError' => 'Did you really think you are allowed to see that?',
//        'authenticate' => [
//            'Form' => [
//                'fields' => ['username' => 'email']
//            ]
//        ],
//        'storage' => 'Session'
//        ]);
        /*
         * Enable the following components for recommended CakePHP security settings.
         * see http://book.cakephp.org/3.0/en/controllers/components/security.html
         */
        //$this->loadComponent('Security');
        //$this->loadComponent('Csrf');
    }

    /**
     * Before render callback.
     *
     * @param \Cake\Event\Event $event The beforeRender event.
     * @return \Cake\Network\Response|null|void
     */
    public function beforeRender(Event $event)
    {
        //var_dump(0);
        if (!array_key_exists('_serialize', $this->viewVars) &&
            in_array($this->response->type(), ['application/json', 'application/xml'])
        ) {
            $this->set('_serialize', true);
        }
        $action = $this->request->action;
        //$controller = $this->name;
        $user = $this->request->session()->read('userData');
        if (!$user && $action != "login") {
            //var_dump(1);die; 
            return $this->redirect(['controller' => 'BidUsers', 'action' => 'login']);
        }
//        if ($controller == 'Admin' && $user->role != 1) {
//            return $this->redirect(['controller' => 'Home', 'action' => 'index']);
//        }
    }
}
