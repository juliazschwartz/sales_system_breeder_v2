<?php

namespace App\Controllers;

class Plantel extends BaseController
{
    public function BuscaEspecies()		
    {
        $request = \Config\Services::request();
        $busca = $request->getPost('busca'); 
        if (empty($busca)) {
        }
        $db = \Config\Database::connect('default',true);
        $especiesEncontradas = $db->query("SELECT * FROM especies WHERE cod like '%$busca%' OR nome_cientifico like '%$busca%' OR nome_popular like '%$busca%' ")->getResultArray();
        return json_encode($especiesEncontradas);
}
    public function EditaEspecies()		
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
    public function ExcluiEspecies()		
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
