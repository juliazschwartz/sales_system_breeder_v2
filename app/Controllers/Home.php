<?php
namespace App\Controllers;
use App\Controllers\BaseController;
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);


class Home extends BaseController
{
    public function index()
    {
        return view('dashboard');
    }

    public function especies()
    {
    // $especieModel = new App\Models\Especie_Model();
    $db = \Config\Database::connect('default',true);
      $especies = ['especies' => $db->query("SELECT * FROM especies")->getResultArray()];
        return view('especies',$especies);
     
    }
    
    public function aside()
    {
        return view('componentes/aside');
    }
    
}
