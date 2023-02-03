<?php

namespace App\Controllers;

class Vendas extends BaseController
{
    public function BuscaClientes()		
    {
        $request = \Config\Services::request();
        $busca = $request->getPost('busca'); 
        if (empty($busca)) {
        }
        $db = \Config\Database::connect('default',true);
     
        $especiesEncontradas = $db->query("SELECT * FROM clientes WHERE email like '%$busca%' OR nome like '%$busca%'  OR cep like '%$busca%'  OR cidade like '%$busca%'
        or fone like '%$busca%' or celular like '%$busca%' or data_nascimento like '%$busca%' or cpf_cnpj like '%$busca%' or logradouro like '%$busca%' or bairro like '%$busca%'
        ")->getResultArray();
        return json_encode($especiesEncontradas);
}
    public function EditaClientes()		
    {
        $request = \Config\Services::request();
        $cod = $request->getPost('codigo'); 
        $id = $request->getPost('id'); 
        $ncm = $request->getPost('ncm'); 
        $nome_popular = $request->getPost('popular'); 
        $nome_cientifico = $request->getPost('cientifico'); 
        $marcacao = $request->getPost('marcacao'); 
        $base = $request->getPost('base'); 
        $descricao = $request->getPost('descricao'); 
      
        if(empty($cod)){
           return false;
        }
        
        $db = \Config\Database::connect('default',true);
        if(!empty($id)){
            $query = $db->query("UPDATE especies SET cod = '$cod', ncm='$ncm', nome_popular = '$nome_popular', 
        nome_cientifico='$nome_cientifico', tipo_marcacao = '$marcacao', desc_nota= '$descricao', base_calculo='$base'
        WHERE id_especie = '$id'");
    }

        else{
            $query = $db->query("INSERT INTO especies ( cod , ncm, nome_popular, nome_cientifico, tipo_marcacao , desc_nota, base_calculo)
            VALUES('$cod','$ncm', '$nome_popular',  '$nome_cientifico', '$marcacao', '$descricao','$base')");
        }

        return json_encode($query);
    }
    public function ExcluiClientes()		
    {
        $request = \Config\Services::request();
        $cod = $request->getPost('codigo'); 
        if (empty($cod)) {
        }
        $db = \Config\Database::connect('default',true);
        $especieDeletada = $db->query("DELETE  FROM especies WHERE cod = $cod ");
    
        return json_encode($especieDeletada);
}

}
