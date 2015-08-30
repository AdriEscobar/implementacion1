<?php

class IndexController extends Zend_Controller_Action
{

    public function init()
    {
    }

    public function indexAction()
    {
//
        $form = new Application_Form_index();
        $form->submit->SetLabel('Login');
        $this->view->form = $form;

        if($this->getRequest()->isPost()) {
           $formData = $this->getRequest()->getPost();
           if($form->isValid($formData)) {
//              $usuario = $form->getValue('usuario');
              $password= $form->getValue('password');
              $usuario = new Application_Model_DbTable_Usuario();
              $usuario -> login($form->getValue('usuario'), $password);
        //IMPORTANT!!!!                 
        //should not always redirect
              if ($usuario){
                  $this->_helper->redirector('indexL');
              } else {
                echo('usuario o contraseña incorrecta');
              }
           } else {
                $form->populate($formData);
           }
        }
    }

    public function consultasAction()
    {
	$form = new Application_Form_Consultas();
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
    
}








