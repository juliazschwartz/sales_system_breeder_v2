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
    $page = 1;
  
    if(!empty($_GET['order'])){
        $order = $_GET['order'];
        $par = $_GET['par'];
        // $order = "ORDER BY $par $order"
    };
    if(!empty($_GET['page'])){
        
        $page = $_GET['page'];
    };
    $db = \Config\Database::connect('default',true);
    $count = $db->query("SELECT COUNT(cod) as count FROM especies")->getResultArray();
    $limit = 10;
    $total = $count[0]['count'] ;
    $pages = ceil((int)$total / $limit);
    $offset = ($page - 1)  * $limit;

    
    
    $start = $offset + 1;
    $end = min(($offset + $limit), $total);
    $array = ['especies' => $db->query("SELECT * FROM especies ORDER BY TRIM($par) $order LIMIT $limit OFFSET $offset")->getResultArray(), 'paginacao'=>[
   'limit'=>$limit, 'total'=>$total, 'pages'=>$pages, 'page'=> $page, 'offset'=> $offset]

];
    
      return view('especies',$array);
     
    }
    public function produtos()
    {
        return view('produtos');
    }
    public function clientes()
    {
        $par = 'id_cliente';
        $order = '';
        if(!empty($_GET)){
            $order = $_GET['order'];
            $par = $_GET['par'];
            // $order = "ORDER BY $par $order"
        };
        $db = \Config\Database::connect('default',true);
      
        $clientes = ['clientes' => $db->query("SELECT * FROM clientes ORDER BY TRIM($par) $order")->getResultArray()];
       
        return view('clientes',$clientes);
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
