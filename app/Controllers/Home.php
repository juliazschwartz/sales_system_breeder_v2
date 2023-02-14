<?php
namespace App\Controllers;
use App\Controllers\BaseController;



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
        $order = 'desc';
        $page = 1;
      
        if(!empty($_GET['order'])){
            $order = $_GET['order'];
            $par = $_GET['par'];
            // $order = "ORDER BY $par $order"
            if($par == 'nome') $par = "TRIM($par)";
        };
        if(!empty($_GET['page'])){
            
            $page = $_GET['page'];
        };
        $db = \Config\Database::connect('default',true);
        $count = $db->query("SELECT COUNT(id_cliente) as count FROM clientes")->getResultArray();
        $limit = 10;
        $total = $count[0]['count'] ;
        $pages = ceil((int)$total / $limit);
        $offset = ($page - 1)  * $limit;
        $start = $offset + 1;
        $end = min(($offset + $limit), $total);
      
        $clientes = ['clientes' => $db->query("SELECT * FROM clientes ORDER BY $par $order  LIMIT $limit OFFSET $offset")->getResultArray(), 'paginacao'=>[
            'limit'=>$limit, 'total'=>$total, 'pages'=>$pages, 'page'=> $page, 'offset'=> $offset]];
       
        return view('clientes',$clientes);
    }
    public function estoque()
    {
        $par = 'id_produto';
        $order = 'asc';
        $page = 1;
        
        if(!empty($_GET['order'])){
            $order = $_GET['order'];
            $par = $_GET['par'];
            if($par == 'valor_un') $par='valor_un +1';
            // $order = "ORDER BY $par $order"
        };
        if(!empty($_GET['page'])){
            
            $page = $_GET['page'];
        };
        $db = \Config\Database::connect('default',true);
        $count = $db->query("SELECT COUNT(id_produto) as count FROM produto_final")->getResultArray();
        $limit = 10;
        $total = $count[0]['count'] ;
        $pages = ceil((int)$total / $limit);
        $offset = ($page - 1)  * $limit;
        $start = $offset + 1;
        $end = min(($offset + $limit), $total);
        
        
        $animais = ['animais' => $db->query(" select especies.nome_cientifico, produto_final.sexo, 
        produto_final.numeracao, produto_final.nascimento,produto_final.status,
        produto_final.valor_un
        from produto_final 
        INNER JOIN especies
        ON especies.id_especie = produto_final.id_categoria_especie  ORDER BY $par $order LIMIT $limit OFFSET $offset")->getResultArray(),'paginacao'=>[
            'limit'=>$limit, 'total'=>$total, 'pages'=>$pages, 'page'=> $page, 'offset'=> $offset]];
       
        
        return view('estoque',$animais);
    }
    
      
    public function compras()
    {
        return view('compras');
    }
    public function vendas()
    {
        $par = 'id_os';
        $order = 'desc';
        $page = 1;
      
        if(!empty($_GET['order'])){
            $order = $_GET['order'];
            $par = $_GET['par'];
            // $order = "ORDER BY $par $order"
            if($par == 'cliente') $par = "TRIM($par)";
            if($par == 'valor_total') $par='valor_total +1';
        };
        if(!empty($_GET['page'])){
            $page = $_GET['page'];
        };
        $db = \Config\Database::connect('default',true);
        $count = $db->query("SELECT COUNT(id_os) as count FROM os")->getResultArray();
        $limit = 10;
        $total = $count[0]['count'] ;
        $pages = ceil((int)$total / $limit);
        $offset = ($page - 1)  * $limit;
        $start = $offset + 1;
        $end = min(($offset + $limit), $total);
      
        $os = ['os' => $db->query("SELECT * FROM os  where tipo = 0 ORDER BY $par $order LIMIT $limit OFFSET $offset")->getResultArray(), 'paginacao'=>[
            'limit'=>$limit, 'total'=>$total, 'pages'=>$pages, 'page'=> $page, 'offset'=> $offset],'clientes' =>  $db->query("SELECT nome FROM clientes ORDER BY id_cliente DESC")->getResultArray()];
       
        return view('vendas',$os);
    }
    public function nfe()
    {
        return view('nfe');
    }
    
}
