<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * BidTopics Controller
 *
 * @property \App\Model\Table\BidTopicsTable $BidTopics
 *
 * @method \App\Model\Entity\BidTopic[] paginate($object = null, array $settings = [])
 */
class BidTopicsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['BidObjects', 'BidUsers']
        ];
        $bidTopics = $this->paginate($this->BidTopics);

        $this->set(compact('bidTopics'));
        $this->set('_serialize', ['bidTopics']);
    }

    /**
     * View method
     *
     * @param string|null $id Bid Topic id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $bidTopic = $this->BidTopics->get($id, [
            'contain' => ['BidObjects', 'BidUsers']
        ]);

        $this->set('bidTopic', $bidTopic);
        $this->set('_serialize', ['bidTopic']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $bidTopic = $this->BidTopics->newEntity();
        if ($this->request->is('post')) {
            $bidTopic = $this->BidTopics->patchEntity($bidTopic, $this->request->getData());
            if ($this->BidTopics->save($bidTopic)) {
                $this->Flash->success(__('The bid topic has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The bid topic could not be saved. Please, try again.'));
        }
        $bidObjects = $this->BidTopics->BidObjects->find('list', ['limit' => 200]);
        $bidUsers = $this->BidTopics->BidUsers->find('list', ['limit' => 200]);
        $this->set(compact('bidTopic', 'bidObjects', 'bidUsers'));
        $this->set('_serialize', ['bidTopic']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Bid Topic id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $bidTopic = $this->BidTopics->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $bidTopic = $this->BidTopics->patchEntity($bidTopic, $this->request->getData());
            if ($this->BidTopics->save($bidTopic)) {
                $this->Flash->success(__('The bid topic has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The bid topic could not be saved. Please, try again.'));
        }
        $bidObjects = $this->BidTopics->BidObjects->find('list', ['limit' => 200]);
        $bidUsers = $this->BidTopics->BidUsers->find('list', ['limit' => 200]);
        $this->set(compact('bidTopic', 'bidObjects', 'bidUsers'));
        $this->set('_serialize', ['bidTopic']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Bid Topic id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $bidTopic = $this->BidTopics->get($id);
        if ($this->BidTopics->delete($bidTopic)) {
            $this->Flash->success(__('The bid topic has been deleted.'));
        } else {
            $this->Flash->error(__('The bid topic could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
