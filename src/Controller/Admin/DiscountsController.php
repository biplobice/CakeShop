<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * Discounts Controller
 *
 * @property \App\Model\Table\DiscountsTable $Discounts
 */
class DiscountsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Products']
        ];
        $this->set('discounts', $this->paginate($this->Discounts));
        $this->set('_serialize', ['discounts']);
    }

    /**
     * View method
     *
     * @param string|null $id Discount id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $discount = $this->Discounts->get($id, [
            'contain' => ['Products']
        ]);
        $this->set('discount', $discount);
        $this->set('_serialize', ['discount']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $discount = $this->Discounts->newEntity();
        if ($this->request->is('post')) {
            $discount = $this->Discounts->patchEntity($discount, $this->request->data);
            if ($this->Discounts->save($discount)) {
                $this->Flash->success(__('The discount has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The discount could not be saved. Please, try again.'));
            }
        }
        $products = $this->Discounts->Products->find('list', ['limit' => 200]);
        $this->set(compact('discount', 'products'));
        $this->set('_serialize', ['discount']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Discount id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $discount = $this->Discounts->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $discount = $this->Discounts->patchEntity($discount, $this->request->data);
            if ($this->Discounts->save($discount)) {
                $this->Flash->success(__('The discount has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The discount could not be saved. Please, try again.'));
            }
        }
        $products = $this->Discounts->Products->find('list', ['limit' => 200]);
        $this->set(compact('discount', 'products'));
        $this->set('_serialize', ['discount']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Discount id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $discount = $this->Discounts->get($id);
        if ($this->Discounts->delete($discount)) {
            $this->Flash->success(__('The discount has been deleted.'));
        } else {
            $this->Flash->error(__('The discount could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
