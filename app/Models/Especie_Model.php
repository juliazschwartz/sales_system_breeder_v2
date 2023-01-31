<?php

namespace App\Models;

use CodeIgniter\Model;

class Especie_Model extends Model
{
    protected function initialize()
    {
        $this->allowedFields[] = 'middlename';
    }
	// public function __construct()
	// {
	// 	parent::__construct();
	// 	$this->table = 'especies';
	// 	$this->colId = 'id_especie';
	// }

    public function getEspecies(){
        $db = \Config\Database::connect('default',true);
        return $db->query("SELECT * FROM especies")->getResultArray();
    }

}