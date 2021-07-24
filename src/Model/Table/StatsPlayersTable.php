<?php
namespace App\Model\Table;

use App\Model\Entity\StatsPlayer;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * StatsPlayers Model
 *
 */
class StatsPlayersTable extends Table
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

        $this->table('Stats_players');
        $this->displayField('name');
        $this->primaryKey('uuid');

        // start of associations.... ugggggggggggggggggggggghhhhhhhh
        $this->addAssociations([
            'hasMany' => [
                'StatsArrows' => ['foreignKey' => 'uuid'],
                'StatsBedsEntered' => ['foreignKey' => 'uuid'],
                'StatsBlocksBroken' => ['foreignKey' => 'uuid'],
                'StatsBlocksPlaced' => ['foreignKey' => 'uuid'],
                'StatsBucketsEmptied' => ['foreignKey' => 'uuid'],
                'StatsBucketsFilled' => ['foreignKey' => 'uuid'],
                'StatsCommandsDone' => ['foreignKey' => 'uuid'],
                'StatsDamageTaken' => ['foreignKey' => 'uuid'],
                'StatsDeath' => ['foreignKey' => 'uuid'],
                'StatsEggsThrown' => ['foreignKey' => 'uuid'],
                'StatsFishCaught' => ['foreignKey' => 'uuid'],
                'StatsItemsCrafted' => ['foreignKey' => 'uuid'],
                'StatsItemsDropped' => ['foreignKey' => 'uuid'],
                'StatsItemsPickedUp' => ['foreignKey' => 'uuid'],
                'StatsKill' => ['foreignKey' => 'uuid'],
                'StatsLastJoin' => ['foreignKey' => 'uuid'],
                'StatsLastSeen' => ['foreignKey' => 'uuid'],
                'StatsMove' => ['foreignKey' => 'uuid'],
                'StatsOmnomnom' => ['foreignKey' => 'uuid'],
                'StatsPlaytime' => ['foreignKey' => 'uuid'],
                'StatsPvp' => ['foreignKey' => 'uuid'],
                'StatsPvpStreak' => ['foreignKey' => 'uuid'],
                'StatsPvpTopStreak' => ['foreignKey' => 'uuid'],
                'StatsShears' => ['foreignKey' => 'uuid'],
                'StatsTeleports' => ['foreignKey' => 'uuid'],
                'StatsToolsBroken' => ['foreignKey' => 'uuid'],
                'StatsTrades' => ['foreignKey' => 'uuid'],
                'StatsWordsSaid' => ['foreignKey' => 'uuid'],
                'StatsXpGained' => ['foreignKey' => 'uuid'],
            ],
            'hasOne' => [
                'StatsJoins' => ['foreignKey' => 'uuid'],
                'StatsLocks' => ['foreignKey' => 'uuid'],
                'StatsTimesChangedWorld' => ['foreignKey' => 'uuid'],
                'StatsVotes' => ['foreignKey' => 'uuid'],
                'StatsTimesKicked' => ['foreignKey' => 'uuid'],
            ]
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
            ->allowEmpty('uuid', 'create')
            ->add('uuid', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->requirePresence('name', 'create')
            ->notEmpty('name');

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
        $rules->add($rules->isUnique(['uuid']));
        return $rules;
    }
}
