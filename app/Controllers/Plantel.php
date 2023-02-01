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
        // $cod = $request->getPost('cod'); 
        // $nome_popular = $request->getPost('nome_popular'); 
        // $nome_cientifico = $request->getPost('nome_cientifico'); 
        // $ncm = $request->getPost('cod'); 
        // $cod = $request->getPost('cod'); 
        // if (empty($cod)) {
        // }
        // $db = \Config\Database::connect('default',true);
        // $especiesEncontradas = $db->query("UPDATE especies WHERE cod = $cod")->getResultArray();
        // return json_encode($especiesEncontradas);
}
    public function ExcluiEspecies()		
    {
        $request = \Config\Services::request();
        $busca = $request->getPost('busca'); 
        if (empty($busca)) {
        }
        $db = \Config\Database::connect('default',true);
        $especiesEncontradas = $db->query("SELECT * FROM especies WHERE cod like '%$busca%' OR nome_cientifico like '%$busca%' OR nome_popular like '%$busca%' ")->getResultArray();
        return json_encode($especiesEncontradas);
}

}
