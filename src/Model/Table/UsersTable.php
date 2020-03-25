<?php
namespace App\Model\Table;

use App\Model\Entity\User;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Users Model
 *
 */
class UsersTable extends Table
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

        $this->table('users');
        $this->displayField('id');
        $this->primaryKey('id');
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
            ->requirePresence('username', 'create')
            ->notEmpty('username');

        $validator
            ->requirePresence('password', 'create')
            ->notEmpty('password')
            ->minLength(
                'password', 6, 
                'A senha deve conter no mínimo 6 caracteres', 
                ['create','edit']);
        $validator
            ->requirePresence('nome', 'create')
            ->notEmpty('nome')
            ->minLength(
                'nome', 2, 
                'A nome deve conter no mínimo 2 caracteres', 
                ['create','edit']);
        $validator
            ->requirePresence('telefone', 'create')
            ->notEmpty('telefone');

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmpty('email');

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
        $rules->add($rules->isUnique(['telefone'],'Este telefone já existe em nosso banco de dados.'));
        $rules->add($rules->isUnique(['username'],'Este usuário já existe em nosso banco de dados.'));
        $rules->add($rules->isUnique(['email'],'Este email já existe em nosso banco de dados.'));
        return $rules;
        
    }
}
