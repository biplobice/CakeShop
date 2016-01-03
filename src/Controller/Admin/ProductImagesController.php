<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * ProductImages Controller
 *
 * @property \App\Model\Table\ProductImagesTable $ProductImages
 */
class ProductImagesController extends AppController
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
        $this->set('productImages', $this->paginate($this->ProductImages));
        $this->set('_serialize', ['productImages']);
    }

    /**
     * View method
     *
     * @param string|null $id Product Image id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $productImage = $this->ProductImages->get($id, [
            'contain' => ['Products']
        ]);
        $this->set('productImage', $productImage);
        $this->set('_serialize', ['productImage']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $productImage = $this->ProductImages->newEntity();
        if ($this->request->is('post')) {
            $productImage = $this->ProductImages->patchEntity($productImage, $this->request->data);
            if ($this->ProductImages->save($productImage)) {
                $this->Flash->success(__('The product image has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The product image could not be saved. Please, try again.'));
            }
        }
        $products = $this->ProductImages->Products->find('list', ['limit' => 200]);
        $this->set(compact('productImage', 'products'));
        $this->set('_serialize', ['productImage']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Product Image id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $productImage = $this->ProductImages->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $productImage = $this->ProductImages->patchEntity($productImage, $this->request->data);
            if ($this->ProductImages->save($productImage)) {
                $this->Flash->success(__('The product image has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The product image could not be saved. Please, try again.'));
            }
        }
        $products = $this->ProductImages->Products->find('list', ['limit' => 200]);
        $this->set(compact('productImage', 'products'));
        $this->set('_serialize', ['productImage']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Product Image id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $productImage = $this->ProductImages->get($id);
        if ($this->ProductImages->delete($productImage)) {
            $this->Flash->success(__('The product image has been deleted.'));
        } else {
            $this->Flash->error(__('The product image could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
