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

}
