<?php

class Application_Model_DbTable_Usuario extends Zend_Db_Table_Abstract
{

    protected $_name = 'EIA';

    public function login($usuario, $password) {
echo($usuario);
	$row = $this->fetchRow('usuario = ' . $usuario);// . 'AND password = ' . $password);
	if (!$row) {
	    throw new Exception("Usuario o conteaseña incorrecta");
	}
	return $row->toArray();
    }

}

