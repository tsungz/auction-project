<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Core\Configure;

/**
 * BidUsers Controller
 *
 * @property \App\Model\Table\BidUsersTable $BidUsers
 *
 * @method \App\Model\Entity\BidUser[] paginate($object = null, array $settings = [])
 */
class BidUsersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $bidUsers = $this->paginate($this->BidUsers);
        //var_dump($this->request->session('userData'));die; 
        $this->set(compact('bidUsers'));
        $this->set('_serialize', ['bidUsers']);
    }

    /**
     * login method
     *
     * @return \Cake\Http\Response|null
     */
    public function login()
    {
        //$this->request->session()->destroy();
        $user = $this->request->session()->read('userData');
        $controller = Configure::read('Common.Basic.Ctl.LoginSuccess');
        $action = Configure::read('Common.Basic.Action.ListView');
        if ($user) {
            return $this->redirect(['controller' => $controller, 'action' => $action]);
        }
        if ($this->request->is('post')) {
            $data = $this->request->data;
            $user = $this->BidUsers->find()->where([
                'username' => $data['username'],
                'password' => md5($data['password'])])->hydrate(false)->first();
            if ($user) {
                $this->Flash->success(__('Login successfully'));
                $this->request->session()->write('userData', $user);
                return $this->redirect(['controller' => $controller, 'action' => $action]);
            }
            $this->Flash->error(__('reInput!!!'));
        }
    }

    /**
     * Logout method
     *
     * @return \Cake\Http\Response|null
     */
    public function logout()
    {
        $this->request->session()->destroy();
        $this->Flash->success(__('Logout successfully'));
        $controller = Configure::read('Common.Basic.Ctl.LogoutSuccess');
        $action = Configure::read('Common.Basic.Action.Login');
        return $this->redirect(['controller' => $controller, 'action' => $action]);
    }

    /**
     * View method
     *
     * @param string|null $id Bid User id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $bidUser = $this->BidUsers->get($id, [
            'contain' => []
        ]);

        $this->set('bidUser', $bidUser);
        $this->set('_serialize', ['bidUser']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $bidUser = $this->BidUsers->newEntity();
        if ($this->request->is('post')) {
            $bidUser = $this->BidUsers->patchEntity($bidUser, $this->request->getData());
            if ($this->BidUsers->save($bidUser)) {
                $this->Flash->success(__('The bid user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The bid user could not be saved. Please, try again.'));
        }
        $this->set(compact('bidUser'));
        $this->set('_serialize', ['bidUser']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Bid User id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $bidUser = $this->BidUsers->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $bidUser = $this->BidUsers->patchEntity($bidUser, $this->request->getData());
            if ($this->BidUsers->save($bidUser)) {
                $this->Flash->success(__('The bid user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The bid user could not be saved. Please, try again.'));
        }
        $this->set(compact('bidUser'));
        $this->set('_serialize', ['bidUser']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Bid User id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $bidUser = $this->BidUsers->get($id);
        if ($this->BidUsers->delete($bidUser)) {
            $this->Flash->success(__('The bid user has been deleted.'));
        } else {
            $this->Flash->error(__('The bid user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
