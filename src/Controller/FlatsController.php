<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Flats Controller
 *
 * @property \App\Model\Table\FlatsTable $Flats
 * @method \App\Model\Entity\Flat[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class FlatsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $flats = $this->paginate($this->Flats);

        $this->set(compact('flats'));
    }

    /**
     * View method
     *
     * @param string|null $id Flat id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $flat = $this->Flats->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('flat'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $flat = $this->Flats->newEmptyEntity();
        if ($this->request->is('post')) {
            $flat = $this->Flats->patchEntity($flat, $this->request->getData());
            if ($this->Flats->save($flat)) {
                $this->Flash->success(__('The flat has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The flat could not be saved. Please, try again.'));
        }
        $this->set(compact('flat'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Flat id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $flat = $this->Flats->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $flat = $this->Flats->patchEntity($flat, $this->request->getData());
            if ($this->Flats->save($flat)) {
                $this->Flash->success(__('The flat has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The flat could not be saved. Please, try again.'));
        }
        $this->set(compact('flat'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Flat id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $flat = $this->Flats->get($id);
        if ($this->Flats->delete($flat)) {
            $this->Flash->success(__('The flat has been deleted.'));
        } else {
            $this->Flash->error(__('The flat could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
