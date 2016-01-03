<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

/**
 * Products Controller
 *
 * @property \App\Model\Table\ProductsTable $Products
 */
class ProductsController extends AppController
{
    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->Auth->allow(['index', 'view', 'about', 'contact']);
    }

    /**
     * Index method
     *
     * @return void
     */
    public function index($cat_id=null, $sub_cat_id=null)
    {
    	// Set leftmenu 
    	$this->loadModel('Categories');	
    	$query = $this->Categories->find('all', [
    		'contain' => ['SubCategories']
    	]);
		$this->set('categories', $query);
		
		// Set conditions
		$conditions = array();
		if (!empty($cat_id)) {
			$conditions['Products.category_id'] = $cat_id;
		}
		if (!empty($sub_cat_id)) {
			$conditions['Products.sub_category_id'] = $sub_cat_id;
		}
		    	
        $this->paginate = [
        	'conditions' => $conditions,
            'contain' => ['Categories', 'SubCategories', 'Discounts' => function ($q) {
            	return $q
            		->where(['Discounts.start_at <' => date('Y-m-d H:i:s'), 'Discounts.end_at >' => date('Y-m-d H:i:s')])
            		->limit(1);
            }]
        ];
        $this->set('products', $this->paginate($this->Products));
        $this->set('_serialize', ['products']);
    }

    /**
     * View method
     *
     * @param string|null $id Product id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $product = $this->Products->get($id, [
            'contain' => ['Categories', 'SubCategories', 'Discounts' => function ($q) {
            	return $q
            		->where(['Discounts.start_at <' => date('Y-m-d H:i:s'), 'Discounts.end_at >' => date('Y-m-d H:i:s')])
            		->limit(1);
            }]
        ]);
        $this->set('product', $product);
        $this->set('_serialize', ['product']);
		
		// Related products
        $this->paginate = [
            'contain' => ['Categories', 'SubCategories'],
            'limit' => 5
        ];
        $this->set('products', $this->paginate($this->Products));
        $this->set('_serialize', ['products']);
    }
	
	public function search()
	{
		//
	}



    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $product = $this->Products->newEntity();
        if ($this->request->is('post')) {
            $product = $this->Products->patchEntity($product, $this->request->data);
            if ($this->Products->save($product)) {
                $this->Flash->success(__('The product has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The product could not be saved. Please, try again.'));
            }
        }
        $categories = $this->Products->Categories->find('list', ['limit' => 200]);
        $subCategories = $this->Products->SubCategories->find('list', ['limit' => 200]);
        $this->set(compact('product', 'categories', 'subCategories'));
        $this->set('_serialize', ['product']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Product id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $product = $this->Products->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $product = $this->Products->patchEntity($product, $this->request->data);
            if ($this->Products->save($product)) {
                $this->Flash->success(__('The product has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The product could not be saved. Please, try again.'));
            }
        }
        $categories = $this->Products->Categories->find('list', ['limit' => 200]);
        $subCategories = $this->Products->SubCategories->find('list', ['limit' => 200]);
        $this->set(compact('product', 'categories', 'subCategories'));
        $this->set('_serialize', ['product']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Product id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $product = $this->Products->get($id);
        if ($this->Products->delete($product)) {
            $this->Flash->success(__('The product has been deleted.'));
        } else {
            $this->Flash->error(__('The product could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
