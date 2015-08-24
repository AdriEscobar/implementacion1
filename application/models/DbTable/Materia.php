<?php

class Application_Model_DbTable_Materia extends Zend_Db_Table_Abstract
{

    protected $_name = 'EIA';

  public function getMateria($id)
  {
	$id = (int)$id;
	$row = $this->fetchRow('id = ' . $id);
	if(!$row) {
	  throw new Exception("Could not fin row $id");
	}
	return $row->toArray();	 
  }

  public function addMateria($artist, $title)
  {
	$data = array(
		'nombre'   => $nombre;
		'creditos' => $creditos;
		'periodo'  => $periodo;
	);
	$this->insert($data);
  }

  public function updateMateria($id, $nombre, $creditos, $periodo)
  {
        $data = array(
                'nombre'   => $nombre;
                'creditos' => $creditos;
                'periodo'  => $periodo;
        );
        $this->update($data, 'id = '. (int)$id);	
  } 

  public function deleteMateria($id)
  {
	$this-delete('id ='.(int)$id);
  }

  public function searchMateria($nombre)
  {
	$row = $this->fetchRow('nombre = ' . $nombre);
	if(!$row){
	   throw new Exception("Could not find row $nombre");
	}
	return $row->toArray();
  }

}

