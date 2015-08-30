<?php

class Application_Form_Login extends Zend_Form
{

    public function init()
    {
	$this->setName('login');

	$usuario = new Zend_Form_Element_Text('usuario');
	$usuario->setLabel('Usuario')
		->setRequired(true)
		->addFilter('StringTrim')
		->addValidator('NotEmpty');

	$password = new Zend_Form_Element_Texr('password');
	$password->setLaberl('Contraseña')
		 ->setRequired(true)
		 ->addFilter('StringTrim')
		 ->addValidator('NotEmpty');

	$submit = new Zend_Form_Element_Submit('submit');
	$submit->setAttrib('usuario','submitbutton');

	$this->addElements(array($usuario, $password, $submit));
    }


}

