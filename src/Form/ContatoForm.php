<?php

namespace App\Form;

use Cake\Form\Schema;
use Cake\Validation\Validator;
use Cake\Form;
class ContatoForm extends Form{

	public function _buildSchema(Schema $schema){
		$schema->addField('nome','string');
		$schema->addField('email','string');
		$schema->addField('msg','string');

		return $schema;
}
		public function _buildValidator(Validator $validator){

			$validator->add('msg',[
					'minLength'=> [
					'rule'=>['minLength',10],
					'message'=>'A mensagem precisa ter mais de 10 caracteres.'
					]
				]);
				$validator->notEmpty('nome');
				$validator->notEmpty('email');

				return $validator;
		}
	

}

?>