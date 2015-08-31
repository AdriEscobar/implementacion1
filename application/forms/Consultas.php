<?php

class Application_Form_Consultas extends Zend_Form
{

    public function init()
    {
	$this->setName('Buscar');

	$materia = new Zend_Form_Element_Text('materia');
	$materia ->setLabel('Materia')
		 ->setRequired(true)
                 ->addFilter('StringTrim')
		->addValidator('NotEmpty');

	$cursadas = new Zend_Form_Element_Radio('cursadas');
	$cursadas->setLabel('personas que han cursado materia')
		 ->addMultiOptions(array('si' => 'Si', 'no' => 'No'));

	$submit = new Zend_Form_Element_Submit('submit');
	$submit->setAttrib('materia','submitbutton');

	$this->addElements(array($materia, $cursadas, $submit));
     }
}

