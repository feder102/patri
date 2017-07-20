<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * AsoPersonAddresses Controller
 *
 * @property \App\Model\Table\AsoPersonAddressesTable $AsoPersonAddresses
 *
 * @method \App\Model\Entity\AsoPersonAddress[] paginate($object = null, array $settings = [])
 */
class AsoPersonAddressesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['PerPersons', 'AddAddresses', 'AddAddressTypes']
        ];
        $asoPersonAddresses = $this->paginate($this->AsoPersonAddresses);

        $this->set(compact('asoPersonAddresses'));
        $this->set('_serialize', ['asoPersonAddresses']);
    }

    /**
     * View method
     *
     * @param string|null $id Aso Person Address id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $asoPersonAddress = $this->AsoPersonAddresses->get($id, [
            'contain' => ['PerPersons', 'AddAddresses', 'AddAddressTypes']
        ]);

        $this->set('asoPersonAddress', $asoPersonAddress);
        $this->set('_serialize', ['asoPersonAddress']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $asoPersonAddress = $this->AsoPersonAddresses->newEntity();
        if ($this->request->is('post')) {
            $asoPersonAddress = $this->AsoPersonAddresses->patchEntity($asoPersonAddress, $this->request->getData());
            if ($this->AsoPersonAddresses->save($asoPersonAddress)) {
                $this->Flash->success(__('The aso person address has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The aso person address could not be saved. Please, try again.'));
        }
        $perPersons = $this->AsoPersonAddresses->PerPersons->find('list', ['limit' => 200]);
        $addAddresses = $this->AsoPersonAddresses->AddAddresses->find('list', ['limit' => 200]);
        $addAddressTypes = $this->AsoPersonAddresses->AddAddressTypes->find('list', ['limit' => 200]);
        $this->set(compact('asoPersonAddress', 'perPersons', 'addAddresses', 'addAddressTypes'));
        $this->set('_serialize', ['asoPersonAddress']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Aso Person Address id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $asoPersonAddress = $this->AsoPersonAddresses->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $asoPersonAddress = $this->AsoPersonAddresses->patchEntity($asoPersonAddress, $this->request->getData());
            if ($this->AsoPersonAddresses->save($asoPersonAddress)) {
                $this->Flash->success(__('The aso person address has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The aso person address could not be saved. Please, try again.'));
        }
        $perPersons = $this->AsoPersonAddresses->PerPersons->find('list', ['limit' => 200]);
        $addAddresses = $this->AsoPersonAddresses->AddAddresses->find('list', ['limit' => 200]);
        $addAddressTypes = $this->AsoPersonAddresses->AddAddressTypes->find('list', ['limit' => 200]);
        $this->set(compact('asoPersonAddress', 'perPersons', 'addAddresses', 'addAddressTypes'));
        $this->set('_serialize', ['asoPersonAddress']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Aso Person Address id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $asoPersonAddress = $this->AsoPersonAddresses->get($id);
        if ($this->AsoPersonAddresses->delete($asoPersonAddress)) {
            $this->Flash->success(__('The aso person address has been deleted.'));
        } else {
            $this->Flash->error(__('The aso person address could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
