<?php
namespace App\Model\Table;

use App\Model\Entity\User;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Users Model
 *
 * @property \Cake\ORM\Association\HasMany $Carts
 * @property \Cake\ORM\Association\HasMany $Orders
 * @property \Cake\ORM\Association\HasMany $Reviews
 */
class UsersTable extends Table
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

        $this->table('users');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Carts', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('Orders', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('Reviews', [
            'foreignKey' => 'user_id'
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
            ->add('email', 'valid', ['rule' => 'email'])
            ->requirePresence('email', 'create')
            ->notEmpty('email');

        $validator
            ->requirePresence('password', 'create')
            ->notEmpty('password');

        $validator
            ->requirePresence('first_name', 'create')
            ->notEmpty('first_name');

        $validator
            ->requirePresence('last_name', 'create')
            ->notEmpty('last_name');

        $validator
            ->allowEmpty('company_name');

        $validator
            ->allowEmpty('avatar');

        $validator
            ->add('birth_date', 'valid', ['rule' => 'date'])
            ->allowEmpty('birth_date');

        $validator
            ->requirePresence('address', 'create')
            ->notEmpty('address');

        $validator
            ->allowEmpty('address2');

        $validator
            ->requirePresence('city', 'create')
            ->notEmpty('city');

        $validator
            ->add('zip', 'valid', ['rule' => 'numeric'])
            ->requirePresence('zip', 'create')
            ->notEmpty('zip');

        $validator
            ->allowEmpty('country');

        $validator
            ->requirePresence('phone', 'create')
            ->notEmpty('phone');

        $validator
            ->add('role', 'valid', ['rule' => 'numeric'])
            ->requirePresence('role', 'create')
            ->notEmpty('role');

        $validator
            ->add('status', 'valid', ['rule' => 'boolean'])
            ->requirePresence('status', 'create')
            ->notEmpty('status');

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
        $rules->add($rules->isUnique(['email']));
        return $rules;
    }
}
