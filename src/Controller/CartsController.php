<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Carts Controller
 *
 * @property \App\Model\Table\CartsTable $Carts
 */
class CartsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        // $this->paginate = [
            // 'contain' => ['Users', 'Products']
        // ];
        // $this->set('carts', $this->paginate($this->Carts));
        // $this->set('_serialize', ['carts']);
    }

    /**
     * View method
     *
     * @param string|null $id Cart id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $cart = $this->Carts->get($id, [
            'contain' => ['Users', 'Products']
        ]);
        $this->set('cart', $cart);
        $this->set('_serialize', ['cart']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
    	$this->autoRender = false;
    	$this->log(print_r($this->request->data, true));
		
        $cart = $this->Carts->newEntity();
        if ($this->request->is('post')) {
            $cart = $this->Carts->patchEntity($cart, $this->request->data);
            if ($this->Carts->save($cart)) {
                $this->Flash->success(__('The cart has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The cart could not be saved. Please, try again.'));
            }
        }
        $users = $this->Carts->Users->find('list', ['limit' => 200]);
        $products = $this->Carts->Products->find('list', ['limit' => 200]);
        $this->set(compact('cart', 'users', 'products'));
        $this->set('_serialize', ['cart']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Cart id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $cart = $this->Carts->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $cart = $this->Carts->patchEntity($cart, $this->request->data);
            if ($this->Carts->save($cart)) {
                $this->Flash->success(__('The cart has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The cart could not be saved. Please, try again.'));
            }
        }
        $users = $this->Carts->Users->find('list', ['limit' => 200]);
        $products = $this->Carts->Products->find('list', ['limit' => 200]);
        $this->set(compact('cart', 'users', 'products'));
        $this->set('_serialize', ['cart']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Cart id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $cart = $this->Carts->get($id);
        if ($this->Carts->delete($cart)) {
            $this->Flash->success(__('The cart has been deleted.'));
        } else {
            $this->Flash->error(__('The cart could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
