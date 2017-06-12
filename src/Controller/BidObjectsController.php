<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Core\Configure;

/**
 * BidObjects Controller
 *
 * @property \App\Model\Table\BidObjectsTable $BidObjects
 *
 * @method \App\Model\Entity\BidObject[] paginate($object = null, array $settings = [])
 */
class BidObjectsController extends AppController
{
    public $components = ['Common'];

    /**
     * listView method
     *
     * @return \Cake\Http\Response|null
     */
    public function listView()
    {
        $this->paginate = [
            'limit' => Configure::read('Common.Paginate'),
            'contain' => ['BidUsers'],
            'order' => [
                'BidObjects.id' => 'asc'
            ]
        ];
        $query = $this->BidObjects->find()->where(['end_time >=' => date("Y-m-d H:m:s")]);
        $bidObjects = $this->paginate($query);
        foreach ($bidObjects as $bidObject) {
            $bidObject->time_left = $this->Common->strTimeRemain($bidObject->end_time);
        }

        $this->set(compact('bidObjects'));
        $this->set('_serialize', ['bidObjects']);
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['BidUsers']
        ];
        $bidObjects = $this->paginate($this->BidObjects);

        $this->set(compact('bidObjects'));
        $this->set('_serialize', ['bidObjects']);
    }

    /**
     * View method
     *
     * @param string|null $id Bid Object id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $bidObject = $this->BidObjects->get($id, [
            'contain' => ['BidUsers']
        ]);

        $bidObject->start_time = $this->Common->setEndDateDisplay($bidObject->start_time);
        $bidObject->end_time = $this->Common->setEndDateDisplay($bidObject->end_time);
        $this->set('bidObject', $bidObject);
        $this->set('_serialize', ['bidObject']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $bidObject = $this->BidObjects->newEntity();
        if ($this->request->is('post')) {
            $bidObject = $this->BidObjects->patchEntity($bidObject, $this->request->getData());
            if ($this->BidObjects->save($bidObject)) {
                $this->Flash->success(__('The bid object has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The bid object could not be saved. Please, try again.'));
        }
        $bidUsers = $this->BidObjects->BidUsers->find('list', ['limit' => 200]);
        $this->set(compact('bidObject', 'bidUsers'));
        $this->set('_serialize', ['bidObject']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Bid Object id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $bidObject = $this->BidObjects->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $bidObject = $this->BidObjects->patchEntity($bidObject, $this->request->getData());
            if ($this->BidObjects->save($bidObject)) {
                $this->Flash->success(__('The bid object has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The bid object could not be saved. Please, try again.'));
        }
        $bidUsers = $this->BidObjects->BidUsers->find('list', ['limit' => 200]);
        $this->set(compact('bidObject', 'bidUsers'));
        $this->set('_serialize', ['bidObject']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Bid Object id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $bidObject = $this->BidObjects->get($id);
        if ($this->BidObjects->delete($bidObject)) {
            $this->Flash->success(__('The bid object has been deleted.'));
        } else {
            $this->Flash->error(__('The bid object could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
