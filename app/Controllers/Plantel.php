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

public function filterData(&$str){ 
    $str = preg_replace("/\t/", "\\t", $str); 
    $str = preg_replace("/\r?\n/", "\\n", $str); 
    if(strstr($str, '"')) $str = '"' . str_replace('"', '""', $str) . '"'; 
}

public function exportData2Excel(){

    $request = \Config\Services::request();
    $data = $request->getPost('content-excel'); 
    $data = json_decode($data);
    $data = json_decode(json_encode($data),true);
  
    header('Content-Type: text/csv; charset=utf-8');
    header('Content-Disposition: attachment; filename=csv_export.csv');
    $flag = false; 
    foreach($data as $row) { 
        if(!$flag) { 
            // display column names as first row 
            echo implode("\t", array_keys($row)) . "\n"; 
            $flag = true; 
        } 
        
        array_walk($row, array($this, 'filterData')); 
        echo implode("\t", array_values($row)) . "\n"; 
        } 
     
}


}
