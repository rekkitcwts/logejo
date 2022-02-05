<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Flats Model
 *
 * @method \App\Model\Entity\Flat newEmptyEntity()
 * @method \App\Model\Entity\Flat newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Flat[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Flat get($primaryKey, $options = [])
 * @method \App\Model\Entity\Flat findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Flat patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Flat[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Flat|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Flat saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Flat[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Flat[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Flat[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Flat[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class FlatsTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('flats');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('flatname')
            ->maxLength('flatname', 255)
            ->requirePresence('flatname', 'create')
            ->notEmptyString('flatname');

        $validator
            ->scalar('flattype')
            ->maxLength('flattype', 255)
            ->requirePresence('flattype', 'create')
            ->notEmptyString('flattype');

        $validator
            ->numeric('flatlat')
            ->requirePresence('flatlat', 'create')
            ->notEmptyString('flatlat');

        $validator
            ->numeric('flatlng')
            ->requirePresence('flatlng', 'create')
            ->notEmptyString('flatlng');

        $validator
            ->integer('flatlgbt')
            ->notEmptyString('flatlgbt');

        $validator
            ->integer('is_active')
            ->notEmptyString('is_active');

        return $validator;
    }
}
