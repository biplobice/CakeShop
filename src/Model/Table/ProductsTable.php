<?php
namespace App\Model\Table;

use App\Model\Entity\Product;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Products Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Categories
 * @property \Cake\ORM\Association\BelongsTo $SubCategories
 */
class ProductsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('products');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Categories', [
            'foreignKey' => 'category_id'
        ]);
        $this->belongsTo('SubCategories', [
            'foreignKey' => 'sub_category_id'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->add('id', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('id', 'create');

        $validator
            ->allowEmpty('sku');

        $validator
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->allowEmpty('description');

        $validator
            ->add('buy_price', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('buy_price');

        $validator
            ->add('sell_price', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('sell_price');

        $validator
            ->add('units_in_stock', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('units_in_stock');

        $validator
            ->allowEmpty('size');

        $validator
            ->allowEmpty('color');

        $validator
            ->allowEmpty('weight');

        $validator
            ->add('rating', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('rating');

        $validator
            ->add('thumb', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('thumb');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['category_id'], 'Categories'));
        $rules->add($rules->existsIn(['sub_category_id'], 'SubCategories'));
        return $rules;
    }
}
