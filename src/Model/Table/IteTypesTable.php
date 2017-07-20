<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * IteTypes Model
 *
 * @property \App\Model\Table\IteClassesTable|\Cake\ORM\Association\BelongsTo $IteClasses
 *
 * @method \App\Model\Entity\IteType get($primaryKey, $options = [])
 * @method \App\Model\Entity\IteType newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\IteType[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\IteType|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\IteType patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\IteType[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\IteType findOrCreate($search, callable $callback = null, $options = [])
 */
class IteTypesTable extends Table
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

        $this->setTable('ite_types');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('IteClasses', [
            'foreignKey' => 'item_class_id',
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
            ->requirePresence('value', 'create')
            ->notEmpty('value');

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
        $rules->add($rules->existsIn(['item_class_id'], 'IteClasses'));

        return $rules;
    }
}
