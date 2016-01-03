<?php
namespace App\Model\Entity;

use Cake\Auth\DefaultPasswordHasher;
use Cake\ORM\Entity;

/**
 * User Entity.
 *
 * @property int $id
 * @property string $email
 * @property string $password
 * @property string $first_name
 * @property string $last_name
 * @property string $company_name
 * @property string $avatar
 * @property \Cake\I18n\Time $birth_date
 * @property string $address
 * @property string $address2
 * @property string $city
 * @property int $zip
 * @property string $country
 * @property string $phone
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 * @property int $role
 * @property bool $status
 */
class User extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false,
    ];
	
	protected function _setPassword($value) {
		$hasher = new DefaultPasswordHasher();
		return $hasher->hash($value);
	}
}