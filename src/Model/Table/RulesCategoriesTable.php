<?php
namespace App\Model\Table;

use App\Model\Entity\RulesCategory;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * RulesCategories Model
 *
 * @property \Cake\ORM\Association\HasMany $Rules
 */
class RulesCategoriesTable extends Table
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

        $this->table('rules_categories');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->hasMany('Rules', [
            'foreignKey' => 'rules_category_id'
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
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->requirePresence('icon', 'create')
            ->notEmpty('icon');

        return $validator;
    }
}
