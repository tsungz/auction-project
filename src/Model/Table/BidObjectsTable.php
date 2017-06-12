<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * BidObjects Model
 *
 * @property \Cake\ORM\Association\BelongsTo $BidUsers
 *
 * @method \App\Model\Entity\BidObject get($primaryKey, $options = [])
 * @method \App\Model\Entity\BidObject newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\BidObject[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\BidObject|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\BidObject patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\BidObject[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\BidObject findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class BidObjectsTable extends Table
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

        $this->setTable('bid_objects');
        $this->setDisplayField('title');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('BidUsers', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER'
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
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('title', 'create')
            ->notEmpty('title');

        $validator
            ->requirePresence('details', 'create')
            ->notEmpty('details');

        $validator
            ->requirePresence('images_a', 'create')
            ->notEmpty('images_a');

        $validator
            ->requirePresence('images_b', 'create')
            ->notEmpty('images_b');

        $validator
            ->requirePresence('images_c', 'create')
            ->notEmpty('images_c');

        $validator
            ->integer('step_call')
            ->requirePresence('step_call', 'create')
            ->notEmpty('step_call');

        $validator
            ->integer('status')
            ->allowEmpty('status');

        $validator
            ->requirePresence('origin', 'create')
            ->notEmpty('origin');

        $validator
            ->allowEmpty('brand');

        $validator
            ->dateTime('start_time')
            ->requirePresence('start_time', 'create')
            ->notEmpty('start_time');

        $validator
            ->dateTime('end_time')
            ->requirePresence('end_time', 'create')
            ->notEmpty('end_time');

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
        $rules->add($rules->existsIn(['user_id'], 'BidUsers'));

        return $rules;
    }
}
