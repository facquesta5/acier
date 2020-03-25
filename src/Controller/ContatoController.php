<?php
namespace App\Controller;
use App\Form\ContatoForm;

class ContatoController extends AppController{
	public function index(){
		$contato = new ContatoForm();
		$this->set('contato', $contato);
	} 	
}
?>