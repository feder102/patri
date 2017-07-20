<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * PerGenders Model
 *
 * @method \App\Model\Entity\PerGender get($primaryKey, $options = [])
 * @method \App\Model\Entity\PerGender newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\PerGender[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\PerGender|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PerGender patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\PerGender[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\PerGender findOrCreate($search, callable $callback = null, $options = [])
 */
class PerGendersTable extends Table
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

        $this->setTable('per_genders');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
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
            ->allowEmpty('value');

        return $validator;
    }
}
