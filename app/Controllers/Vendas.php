<?php

namespace App\Controllers;
use App\Controllers\BaseController;

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
        $id = $request->getPost('id'); 
        $nome = $request->getPost('nome'); 
        $nascimento = $request->getPost('nascimento'); 
        $cpf = $request->getPost('cpf_cnpj'); 
        $inscricao = $request->getPost('inscricao'); 
        $registro = $request->getPost('registro'); 
        $cep = $request->getPost('cep'); 
        $uf = $request->getPost('uf'); 
        $cidade = $request->getPost('cidade'); 
        $bairro = $request->getPost('bairro'); 
        $logradouro = $request->getPost('logradouro'); 
        $numero = $request->getPost('numero'); 
        $complemento = $request->getPost('complemento'); 
        $telefone = $request->getPost('telefone'); 
        $celular = $request->getPost('celular'); 
        $email = $request->getPost('email'); 
        $fisica_juridica = $request->getPost('fisica_juridica'); 
     
        if(empty($nome)){
           return false;
        }
        
        $db = \Config\Database::connect('default',true);
        if(!empty($id)){
          
            $query = $db->query("UPDATE clientes SET nome = '$nome', data_nascimento='$nascimento', cpf_cnpj = '$cpf', 
        ie='$inscricao', reg_ibama = '$registro', cep= '$cep', uf='$uf', cidade= '$cidade', bairro= '$bairro', logradouro= '$logradouro',
         numero= '$numero',  complemento= '$complemento',  fone= '$telefone',  celular= '$celular',  email= '$email', fisica_juridica='$fisica_juridica'
        WHERE id_cliente = '$id'");
    }
        else{
          
            $query = $db->query("INSERT INTO clientes ( nome , data_nascimento, cpf_cnpj , 
            ie, reg_ibama  , cep, uf, cidade, bairro, logradouro,
             numero,  complemento,  fone,  celular,  email, fisica_juridica)
            VALUES( '$nome', '$nascimento', '$cpf', 
       '$inscricao', '$registro',  '$cep','$uf', '$cidade', '$bairro','$logradouro',
         '$numero',  '$complemento',  '$telefone',  '$celular',  '$email', '$fisica_juridica')");
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
        $especieDeletada = $db->query("DELETE  FROM clientes WHERE id_cliente = $cod ");
    
        return json_encode($especieDeletada);
}
    public function historicoClientes()		
    {
        $request = \Config\Services::request();
        $cpf = $request->getPost('data'); 
        $db = \Config\Database::connect('default',true);
       
        $especieDeletada = $db->query("SELECT os.id_os, os.data_pedido, os.valor_total, os.status, os.forma_pagamento, nfe.status 
        FROM os
        INNER JOIN nfe 
        ON os.id_os = nfe.id_os
        WHERE os.cpf_cnpj = '$cpf'
        ")->getResultArray();
        
        // var_dump("SELECT os.data_pedido, os.valor_total, os.status, os.forma_pagamento, nfe.status 
        // FROM os
        // INNER JOIN nfe 
        // ON os.id_os = nfe.id_os
        // WHERE os.cpf_cnpj = $cpf
        // ");
        // die();
        return json_encode($especieDeletada);
}

public function BuscaVendas()		
{
    $request = \Config\Services::request();
    $busca = $request->getPost('busca'); 
    if (empty($busca)) {
    }
    $db = \Config\Database::connect('default',true);
    $especiesEncontradas = $db->query("SELECT * FROM os 
    WHERE cliente like '%$busca%'  AND tipo =0 OR cpf_cnpj like '%$busca%' AND tipo =0 
    
    ")->getResultArray();
  return json_encode($especiesEncontradas);
}

public function filtraVendas(){
    $request = \Config\Services::request();
    $busca = $request->getPost(); 
    $lista = [];
    foreach($busca as $b){
    $lista[] = $b['valor'];
    }
   $lista =  implode("'OR status= '", $lista); 
   
    if (empty($busca)) {}
    $db = \Config\Database::connect('default',true);
    $osEncontradas = $db->query("SELECT *  FROM os
    WHERE status ='$lista'") ->getResultArray();
    return json_encode($osEncontradas);
}
public function buscaPrecoExemplar(){
    $request = \Config\Services::request();
    $id_os = $request->getPost('id_produto'); 
    $db = \Config\Database::connect('default',true);
    $osEncontradas = $db->query("SELECT valor_un FROM produto_final
    WHERE id_produto ='$id_os'") ->getResultArray();
    return json_encode($osEncontradas);
}
public function novaVenda(){
    $request = \Config\Services::request();
        $id = $request->getPost('id'); 
        $cliente = $request->getPost('cliente'); 
        $tipo_cliente = $request->getPost('tipo_cliente'); 
        $frete = $request->getPost('frete'); 
        $exemplar = $request->getPost('exemplar'); 
        $preco_exemplar = $request->getPost('preco_exemplar'); 
     
        if(empty($cliente)){
           return false;
        }
        
        $db = \Config\Database::connect('default',true);
        if(!empty($id)){
          
            // $query = $db->query("UPDATE os SET cliente = '$cliente', tipo_cliente='$tipo_cliente', frete = '$frete', status='$fisica_juridica' WHERE id_os = '$id'");
    }
        else{
            // cadastra na tabela os
            $query = $db->query("INSERT INTO os ( cliente , tipo_cliente, frete , 
            valor_total, status)
            VALUES( '$cliente', '$tipo_cliente', '$frete', '$preco_exemplar', 'venda_incompleta')");

            // recupera o id desse cadastro
            $order = $db->query("SELECT * FROM os order by id_os DESC LIMIT 1")->getResultArray();
            $id_os = $order[0]['id_os'];
        
            // busca na tabela produto_final as informações do exemplar
            $info_exemplar = $db->query("SELECT * FROM produto_final WHERE id_produto = '$exemplar'")->getResultArray();
            $id_especie = $info_exemplar[0]['id_categoria_especie'];
            $anilha = $info_exemplar[0]['numeracao'];

            // cadastra na tabela produtos_os as informações obtidas das duas tabelas
            $query = $db->query("INSERT INTO produtos_os ( id_os , produto, quantidade , 
            valor_total, preco_un, n_anilha, id_especie)
            VALUES( '$id_os', '$exemplar', '1', '$preco_exemplar', '$preco_exemplar', '$anilha', '$id_especie' )");
        }

        return json_encode($query);
}

}
