<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Product Entity.
 *
 * @property int $id
 * @property int $category_id
 * @property \App\Model\Entity\Category $category
 * @property int $sub_category_id
 * @property \App\Model\Entity\SubCategory $sub_category
 * @property string $sku
 * @property string $name
 * @property string $description
 * @property int $buy_price
 * @property int $sell_price
 * @property int $units_in_stock
 * @property string $size
 * @property string $color
 * @property string $weight
 * @property int $rating
 * @property int $thumb
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $updated
 */
class Product extends Entity
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
}
