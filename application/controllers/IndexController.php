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
              $u= new Application_Model_DbTable_Usuario();
              $u-> login($form->getValue('usuario'), $password);
        //IMPORTANT!!!!                 
        //should not always redirect
              if ($u){
		if($u->perfil === 1){
                  $this->_helper->redirector('profesor');
		} else {
		  $this->_helper->redirector('estudiante');
		}
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
		$materia = $form->getValue('materia');
		$cursadas= $form->getValue('cursadas');
		$EIA = new Application_Model_Dbtable_Materia();
		$EIA-> searchMateria($materia, $cursadas);
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
    
    public function profesorAction()
    {

    }    

    public function estudianteAction(){

    }	
}








