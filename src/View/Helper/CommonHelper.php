<?php
namespace App\View\Helper;

use Cake\View\Helper;
use Cake\View\View;
use Cake\ORM\TableRegistry;


class CommonHelper extends Helper {
	
	public function getCartInfoByUserId($id) {
		$carts = TableRegistry::get("Carts")->find('all', [
			'conditions' => ['Carts.user_id' => $id, 'Carts.status' => 1],
			'contain'	 => ['Products']
		]);
		return $carts;
	}
}

