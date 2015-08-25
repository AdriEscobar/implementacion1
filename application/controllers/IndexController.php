<?php

class IndexController extends Zend_Controller_Action
{

    public function init()
    {
    }

    public function indexAction()
    {
//	$usuario = new Application_Model_DbTable_Usuario();

    }

    public function consultasAction()
    {
	$form = new Application_Form_Search();
	$form->submit->setLabel('Buscar');
	$this->view->form = $form;

	if ($this->getRequest()->isPost()) {
	    $formData = $this->getRequest()->getPost();
            if($form->isValid($formData)){
		$nombre = $form->getValue('nombre');
		$EIA = new Application_Model_Dbtable_Materia();
		$EIA-> searchMateria($nombre);
		$this->view->EIA = $EIA->fetchALL();
	    } else {
		$form->populate($formData);
	    }
	}
    }

    public function registroAction()
    {
        // action body
    }

    public function gestionAction()
    {
        // action body
    }
    
    public function login()
    {
	
    }	    

}







