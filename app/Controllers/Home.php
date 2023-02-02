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
    
    public function aside()
    {
        return view('componentes/aside');
    }
    
    public function especies()
    {
    // $especieModel = new App\Models\Especie_Model();
    $par = 'cod';
    $order = '';
    if(!empty($_GET)){
        $order = $_GET['order'];
        $par = $_GET['par'];
        // $order = "ORDER BY $par $order"
    };
    
    $db = \Config\Database::connect('default',true);
      $especies = ['especies' => $db->query("SELECT * FROM especies ORDER BY $par $order")->getResultArray()];
        return view('especies',$especies);
     
    }
    public function produtos()
    {
        return view('produtos');
    }
    public function clientes()
    {
        return view('clientes');
    }
    public function estoque()
    {
        return view('estoque');
    }
    public function compras()
    {
        return view('compras');
    }
    public function vendas()
    {
        return view('vendas');
    }
    public function nfe()
    {
        return view('nfe');
    }
    
}
