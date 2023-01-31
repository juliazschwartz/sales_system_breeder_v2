<?php

namespace App\Controllers;

class Plantel extends BaseController
{
    public function BuscaEspecies()		// chamado pelo campo de busca da lista de clientes
    {
    $request = \Config\Services::request();
    $busca = $request->getPost('busca'); 
    if (empty($busca)) {
    }
    $db = \Config\Database::connect('default',true);
    $especiesEncontradas = $db->query("SELECT * FROM especies WHERE cod like '%$busca%' OR nome_cientifico like '%$busca%' OR nome_popular like '%$busca%' ")->getResultArray();
 
    // if(empty($especiesEncontradas)){
    //     return json_encode('Nenhum Registro encontrado.')
    // } 
    return json_encode($especiesEncontradas);


    // $this->jphp->executa("
    //     var listUsuarios = JSON.parse(window.clientesInfo);
    //     listUsuarios['$app'] = $listaUsuarios;
    //     window.clientesInfo = JSON.stringify(listUsuarios);
    //     window.initBuscaForm('$app');
    // ");

    // return $this->jphp->send();
}

}
