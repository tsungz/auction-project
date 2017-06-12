<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * BidTopics Model
 *
 * @property \Cake\ORM\Association\BelongsTo $BidObjects
 * @property \Cake\ORM\Association\BelongsTo $BidUsers
 *
 * @method \App\Model\Entity\BidTopic get($primaryKey, $options = [])
 * @method \App\Model\Entity\BidTopic newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\BidTopic[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\BidTopic|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\BidTopic patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\BidTopic[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\BidTopic findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class BidTopicsTable extends Table
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

        $this->setTable('bid_topics');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('BidObjects', [
            'foreignKey' => 'obj_id',
            'joinType' => 'INNER'
        ]);
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
            ->integer('declares')
            ->requirePresence('declares', 'create')
            ->notEmpty('declares');

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
        $rules->add($rules->existsIn(['obj_id'], 'BidObjects'));
        $rules->add($rules->existsIn(['user_id'], 'BidUsers'));

        return $rules;
    }
}
