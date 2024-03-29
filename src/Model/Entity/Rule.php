<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Rule Entity.
 *
 * @property int $id
 * @property int $rules_category_id
 * @property \App\Model\Entity\RulesCategory $rules_category
 * @property string $name
 * @property string $description
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 */
class Rule extends Entity
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
