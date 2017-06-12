<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * BidSponsors Controller
 *
 * @property \App\Model\Table\BidSponsorsTable $BidSponsors
 *
 * @method \App\Model\Entity\BidSponsor[] paginate($object = null, array $settings = [])
 */
class BidSponsorsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $bidSponsors = $this->paginate($this->BidSponsors);

        $this->set(compact('bidSponsors'));
        $this->set('_serialize', ['bidSponsors']);
    }

    /**
     * View method
     *
     * @param string|null $id Bid Sponsor id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $bidSponsor = $this->BidSponsors->get($id, [
            'contain' => []
        ]);

        $this->set('bidSponsor', $bidSponsor);
        $this->set('_serialize', ['bidSponsor']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $bidSponsor = $this->BidSponsors->newEntity();
        if ($this->request->is('post')) {
            $bidSponsor = $this->BidSponsors->patchEntity($bidSponsor, $this->request->getData());
            if ($this->BidSponsors->save($bidSponsor)) {
                $this->Flash->success(__('The bid sponsor has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The bid sponsor could not be saved. Please, try again.'));
        }
        $this->set(compact('bidSponsor'));
        $this->set('_serialize', ['bidSponsor']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Bid Sponsor id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $bidSponsor = $this->BidSponsors->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $bidSponsor = $this->BidSponsors->patchEntity($bidSponsor, $this->request->getData());
            if ($this->BidSponsors->save($bidSponsor)) {
                $this->Flash->success(__('The bid sponsor has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The bid sponsor could not be saved. Please, try again.'));
        }
        $this->set(compact('bidSponsor'));
        $this->set('_serialize', ['bidSponsor']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Bid Sponsor id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $bidSponsor = $this->BidSponsors->get($id);
        if ($this->BidSponsors->delete($bidSponsor)) {
            $this->Flash->success(__('The bid sponsor has been deleted.'));
        } else {
            $this->Flash->error(__('The bid sponsor could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
