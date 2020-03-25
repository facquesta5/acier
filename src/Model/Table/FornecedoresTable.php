<?php
namespace App\Model\Table;

use App\Model\Entity\Fornecedore;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Fornecedores Model
 *
 */
class FornecedoresTable extends Table
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

        $this->table('fornecedores');
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
            ->requirePresence('apelido', 'create')
            ->notEmpty('apelido');

        $validator
            ->requirePresence('razao_social', 'create')
            ->notEmpty('razao_social');

        $validator
            ->requirePresence('cnpj', 'create')
            ->notEmpty('cnpj');

        $validator
            ->requirePresence('telefone', 'create')
            ->notEmpty('telefone');

        $validator
            ->requirePresence('contato', 'create')
            ->notEmpty('contato');

        $validator
            ->requirePresence('endereco', 'create')
            ->notEmpty('endereco');

        return $validator;
    }
}
