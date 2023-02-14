<?php 
include 'componentes/order.php';
?>
<!DOCTYPE html>

<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>Loja - Clientes</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="../assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../assets/js/config.js"></script>
  </head>

  <body>
    
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->
        <?php include 'componentes/aside.php'; ?>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->
          <?php include 'componentes/navbar.php'; ?>
          <!-- / Navbar -->
          <div class="bs-toast toast fade show bg-success d-none" role="alert" aria-live="assertive" aria-atomic="true" style = "z-index: 99999;align-self:center;
margin-top: 97px;
position: absolute;">
                        <div class="toast-header">
                          <i class="bx bx-bell me-2"></i>
                          <div class="me-auto fw-semibold">Mensagem</div>
                         
                          <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                        </div>
                        <div class="toast-body">
                          Operação realizada com sucesso.
                        </div>
                      </div>
          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->
           

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Loja /</span> Clientes</h4>
              

 
          

              <!-- Striped Rows -->
              <div class="card">
                <div class = "d-flex align-items-center "><h5 class="card-header"><button type="button" class="btn btn-primary nova_especie" data-bs-toggle="modal" data-bs-target="#modalCenter">Novo cliente</button></h5>
               
                <span class = "w-75 mx-2">
                  <form class="d-flex" id="formBuscaEspecies" method="post">
                      <input class="form-control me-2 p-2" type="search" placeholder="Buscar" aria-label="Search" name="busca">
                      <button class="btn btn-outline-primary" type="submit">Buscar</button>
                    </form></span>
                    <form id="excel" method="post" action="exportDataExcel">
                    <input type="hidden" id="content-excel" name="content-excel">
                     <button type="submit" class="botao-excel mx-3" > <img src="/assets/img/excel.png" width=60px class="downloadPlanilha"></img></button>
                    </form>
</div>
<div class="modal fade " id="modalHistorico" tabindex="-1"  aria-hidden="true" role="dialog">
<div class="modal-dialog modal-lg modal-dialog-centered "  role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel3">Histórico Vendas</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                            <div class="">
                <div class="table-responsive text-nowrap">
                  <table class="table table-bordered">
                  
                    <tbody class="table-border-bottom-0">
                      
                      
                    </tbody>
                  </table>
                </div>
              </div>
                            </div>
                      
                          </div>
                        </div>
</div>



<div class="modal fade " id="modalCenter" tabindex="-1"  aria-hidden="true" role="dialog">
                          <div class="modal-dialog modal-lg modal-clientes modal-dialog-centered" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="modalCenterTitle">Novo Cliente</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <form id="formEditaEspecies">
                              <div class="modal-body">
                                <div class="row d-none">
                                  <div class="col mb-3">
                                    <label for="nameWithTitle" class="form-label" ></label>
                                    <input type="hidden"  class="form-control" id = "id" name="id">
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col mb-3">
                                    <label for="nameWithTitle" class="form-label" >Nome</label>
                                    <input type="text"  class="form-control" id = "nome" name="nome">
                                  </div>
                                  <div class="col mb-3">
                                    <label for="nameWithTitle" class="form-label" >Data de Nascimento</label>
                                    <input type="date"  class="form-control" placeholder="" id = "nascimento" name="nascimento">
                                  </div>

                                  
                                  
                                </div>
                                <div class = "d-flex my-3">
                                  <div class="form-check mx-1">
                                  <input name="fisica_juridica" class="form-check-input" type="radio" value="fisica" id="fisica" checked="">
                                  <label class="form-check-label" for="fisica"> Pessoa Física </label>
      </div>
                                <div class="form-check">
                                  <input name="fisica_juridica" class="form-check-input mx-1" type="radio" value="juridica" id="juridica">
                                  <label class="form-check-label" for="juridica"> Pessoa Jurídica </label>
                                </div>
      </div>
                                <div class="row">
                               
                                  <div class="col mb-3">
                                    <label for="nameWithTitle" class="form-label" >CPF</label>
                                    <input type="text"  class="form-control" placeholder="" id = "cpf_cnpj" name="cpf_cnpj">
                                  </div>
                                  <div class="col mb-3">
                                    <label for="nameWithTitle" class="form-label">Inscrição Estadual</label>
                                    <input type="text"  class="form-control" placeholder="" id = "inscricao" name = "inscricao">
                                  </div>
                                  <div class="col mb-3">
                                    <label for="nameWithTitle" class="form-label" >Registro (Revenda)</label>
                                    <input type="text"  class="form-control" placeholder="" id = "Registro no Ibama" name ="Registro no Ibama">
                                  </div>
                                </div>
                                
                             
                                <div class="row">
                                  <div class="col mb-3">
                                    <label for="nameWithTitle" class="form-label">CEP</label>
                                    <input type="text"  class="form-control" placeholder=""  id = "cep" name ="cep">
                                  </div>
                                  <div class="col mb-3">
                                    <label for="nameWithTitle" class="form-label">UF</label>
                                    <input type="text"  class="form-control" placeholder=""  id = "uf" name ="uf">
                                  </div>
                                  
                                </div>
                                <div class="row">
                                <div class="col mb-3">
                                    <label for="nameWithTitle" class="form-label">Cidade</label>
                                    <input type="text"  class="form-control" placeholder=""  id = "cidade" name ="cidade">
                                  </div>
                                  <div class="col mb-3">
                                    <label for="nameWithTitle" class="form-label">Bairro</label>
                                    <input type="text"  class="form-control" placeholder=""  id = "bairro" name ="bairro">
                                  </div>
                                </div>
                            
                                <div class="row">
                            
                                </div>
                                <div class="row">
                                <div class="col mb-3">
                                    <label for="nameWithTitle" class="form-label">Logradouro</label>
                                    <input type="text"  class="form-control" placeholder=""  id = "logradouro" name ="logradouro">
                                  </div>
                                <div class="col mb-3">
                                  
                                    <label for="nameWithTitle" class="form-label">Número</label>
                                    <input type="text"  class="form-control" placeholder=""  id = "numero" name ="numero">
                                  </div>
                                  <div class="col mb-3">
                                    <label for="nameWithTitle" class="form-label">Complemento</label>
                                    <input type="text"  class="form-control" placeholder=""  id = "complemento" name ="complemento">
                                  </div>
                                </div>
                            
                                <div class="row">
                                  <div class="col mb-3">
                                    <label for="nameWithTitle" class="form-label">Telefone</label>
                                    <input type="text"  class="form-control" placeholder=""  id = "telefone" name ="telefone">
                                  </div>
                                  <!-- <div class="col mb-3">
                                    <label for="nameWithTitle" class="form-label">Celular</label>
                                    <input type="text"  class="form-control" placeholder=""  id = "celular" name ="celular">
                                  </div> -->
                                  <div class="col mb-3">
                                    <label for="nameWithTitle" class="form-label">Email</label>
                                    <input type="text"  class="form-control" placeholder=""  id = "email" name ="email">
                                  </div>
                                </div>
                        
                               
                                <!-- <div class="row g-2">
                                  <div class="col mb-0">
                                    <label for="emailWithTitle" class="form-label">Email</label>
                                    <input type="text" id="emailWithTitle" class="form-control" placeholder="xxxx@xxx.xx">
                                  </div>
                                  <div class="col mb-0">
                                    <label for="dobWithTitle" class="form-label">DOB</label>
                                    <input type="text" id="dobWithTitle" class="form-control" placeholder="DD / MM / YY">
                                  </div>
                                </div> -->
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                  Fechar
                                </button>
                                <button type="submit" class="btn btn-primary editarCliente">Cadastrar</button>
                              </div>
                            </form>
                            </div>
                          </div>
                        </div>


                        <div class="modal fade" id="modalToggle" aria-labelledby="modalToggleLabel" tabindex="-1" aria-hidden="true" role="dialog">
                          <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="modalToggleLabel">Deletar Cliente</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">Tem certeza que deseja deletar esse registro de cliente?.</div>
                              <div class="modal-footer">
                                <button class="btn btn-danger deletarEspecie" data-bs-target="#modalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">
                                  Deletar
                                </button>
                              </div>
                            </div>
                          </div>
                        </div>
                <div class="table-responsive " style ="font-size:12px">
              
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th>Nome <a class='bx bx-sort' href="?par=nome&order=<?=$order?>" ></a></th>
                        <th>CPF/CNPJ</th>
                        <th>Nascimento</th></th>
                        <th>Email</th></th>
                        <th >UF</th></th>
                        <th>Cidade</th>
                        <th>Telefone</th>
                        <!-- <th>Celular</th> -->
                        <th></th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        <?php foreach($clientes as $cliente){
                            $cliente['nome'] = str_replace('Ã‰','É' ,$cliente['nome']);
                            $cliente['nome'] = str_replace('Ã‡','Ç' ,$cliente['nome']);
                            $cliente['nome'] = str_replace('Ãƒ','Ã' ,$cliente['nome']);
                            $dia = explode('/', $cliente['data_nascimento'])[0] ?? '';
                            $mes = explode('/', $cliente['data_nascimento'])[1] ?? '';
                            $ano = explode('/', $cliente['data_nascimento'])[2] ?? '';
                            
?>
<tr data-id='<?=$cliente['id_cliente']?>'
data-numero='<?=$cliente['numero']?>'
data-cep='<?=$cliente['cep']?>'
data-logradouro="<?=$cliente['logradouro']?> "
data-bairro="<?=$cliente['bairro']?>" 
data-registro="<?=$cliente['reg_ibama']?> "
data-inscricao="<?=$cliente['ie']?>" 
data-complemento="<?=$cliente['complemento']?>"
data-nome="<?=$cliente['nome']?>" 
data-nascimento="<?=$mes.'/'.$dia.'/'.$ano?> " 
 data-email = "<?=$cliente['email']?>"data-uf="<?=$cliente['uf']?>" 
 data-cidade="<?=$cliente['cidade']?>" data-telefone="<?=$cliente['fone']?>" 
 data-celular="<?=$cliente['celular']?>" data-cpf_cnpj="<?=$cliente['cpf_cnpj']?>" data-fisica_juridica="<?=$cliente['fisica_juridica']?>">
                        <td ><strong><?= $cliente['nome']?></strong></td>
                        <!-- var nome_popular = res.nome_popular.replace('Ã©', 'é');
nome_popular = nome_popular.replace('Ã§', 'ç'); -->
                        <td><strong><?= utf8_decode($cliente['cpf_cnpj'])?></strong></td>
                        <td style = "padding: 0 46px;"><?= utf8_decode($cliente['data_nascimento'])?></td>
                        <td ><?= utf8_decode($cliente['email'])?></td>
                        <td style = "padding: 0 33px;"><?= utf8_decode($cliente['uf'])?></td>
                        <td><?= utf8_decode($cliente['cidade'])?></td>
                        <td><?= utf8_decode($cliente['fone'])?></td>
                       
                        
                        <td>
                        <a class="text-center" href="javascript:void(0);"
                                ><i class="bx bx-edit-alt me-1 icone-tabela" data-bs-toggle="modal" data-bs-target="#modalCenter"></i> </a  >
                        </td>

                        <td>  
                        <a class="text-center" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#modalToggle"
                                ><i class="bx bx-trash me-1 icone-tabela"></i> </a
                              ></td>
                        <td>  
                        <a class="text-center historicoCliente" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#modalHistorico"
                                ><i class='bx bx-history' style="font-size: 25px;"></i></a
                              ></td>
                      </tr>
                      <?php
                        }

                        ?>
                      
                     
                    </tbody>
                  </table>
                </div>
   
              </div>
              <!--/ Striped Rows -->
          
            </div>
            <!-- / Content -->
            <?php include 'componentes/pagination.php'; ?>

            

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->

   

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../assets/vendor/libs/popper/popper.js"></script>
    <script src="../assets/vendor/js/bootstrap.js"></script>
    <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="../assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src="../assets/js/main.js"></script>

    <!-- Page JS -->

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>


<script>

function historico(){
  $('.historicoCliente').click(function(){
    var cpf = $(this).parent().parent().data('cpf_cnpj');
    $.ajax({
        url: "historicoClientes",
        type: 'post',
        data: {data:cpf},
        success: function(resposta){
          var html = "<div class='alert alert-dark alert-dismissible m-3' role='alert'> Nenhum Registro Encontrado <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button></div>";
           if(resposta!= '[]'){ 
             $('#modalHistorico').find('tbody').html('');

            var tbody = JSON.parse(resposta).forEach((res)=> {
              res.status == 'nfe_emitida' ?  classe = 'success' :  classe = 'danger';
              res.forma_pagamento == 'avista' ?  res.forma_pagamento = 'à vista' : res.forma_pagamento = res.forma_pagamento;
            $('#modalHistorico').find('tbody').append("<tr data-id_os = "+res.id_os+"><td><strong>"+res.data_pedido+"</strong></td><td><strong>R$ "+res.valor_total+"<strong></td><td><span class='badge bg-label-"+classe+" me-1'>"+res.status+"</span></td><td>"+res.forma_pagamento+"</td><td>Visualizar danfe</td></tr>")
          });
       }
      }
   });
   
      })
      
      
}
  $('#formBuscaEspecies').submit(function(e)
  {
//     var mapObj = {
//     Ã©:"é",
//     Ã§:"Ç"
// };

    e.preventDefault();
    var url = $(this).closest('form').attr('action');
    data = $(this).closest('form').serialize();

    $.ajax({
        url: "buscaClientes",
        type: 'post',
        data: data,
        success: function(resposta){
          // var tbody = "<tr><td></td><td><strong><strong></td> <td><strong><strong></td><td>Indefinido</td><td>Indefinido</td><td><a class='text-center' href='javascript:void(0);'><i class='bx bx-edit-alt me-1 icone-tabela'></i> </a  ></td> <td>  <a class='text-center' href='javascript:void(0);'><i class='bx bx-trash me-1 icone-tabela'></i> </a></td></tr>"
          $('tbody').html('');
          
          var html = "<div class='alert alert-dark alert-dismissible m-3' role='alert'> Nenhum Registro Encontrado <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button></div>";
           if(resposta!= '[]'){
            var tbody = JSON.parse(resposta).forEach((res)=> {
            var data_nascimento = res.data_nascimento.split("/")[1]+'/'+res.data_nascimento.split("/")[0]+'/'+res.data_nascimento.split("/")[2];

            $('tbody').append("<tr data-id='"+res.id_cliente+"'  data-nome='"+res.nome+"' data-cpf_cnpj='"+res.cpf_cnpj+"' data-nascimento='"+data_nascimento+"' data-email='"+res.email+"' data-uf='"+res.uf+"' data-cidade='"+res.cidade+"' data-telefone='"+res.fone+"' data-registro= '"+res.registro+"' data-cep = '"+res.cep+"' data-logradouro= '"+res.logradouro+"' data-bairro= '"+res.bairro+"' data-numero = '"+res.numero+"'  data-inscricao= '"+res.inscricao+"' data-complemento= '"+res.complemento+"' data-fisica_juridica= '"+res.fisica_juridica+"'><td><strong>"+res.nome+"</strong></td><td><strong>"+res.cpf_cnpj+"<strong></td><td><strong>"+res.data_nascimento+"<strong></td><td>"+res.email+"</td><td>"+res.uf+"</td><td>"+res.cidade+"</td><td>"+res.fone+"</td><td><a class='text-center'href='javascript:void(0);'><i class='bx bx-edit-alt  me-1 icone-tabela' data-bs-toggle='modal' data-bs-target='#modalCenter'></i> </a> </td><td><a class='text-center'href='javascript:void(0);'><i class='bx bx-trash me-1 icone-tabela' data-bs-toggle='modal' data-bs-target='#modalToggle'></i> </a> </td><td><a class='text-center historicoCliente' href='javascript:void(0);' data-bs-toggle='modal' data-bs-target='#modalHistorico'><i class='bx bx-history' style='font-size: 25px;'></i></a></td></tr>")
          
          });
            
            
          }
          else $(html).insertAfter('.align-items-baseline');
          clickEdit();
          clickDelete();
          historico();
          var dados = {};
  var data = $('tbody').find('tr');
    delete data.length ;
    delete data.prevObject ;
  for (var [key, value] of Object.entries(data)) {
    dados[key]= {'nome;': value.getAttribute('data-nome')+';', 'cpf_cnpj;': value.getAttribute('data-cpf')+';','data_nascimento;' :  value.getAttribute('data-nascimento')+';' };
      } ;
$("#content-excel").val(JSON.stringify(dados));
       }
   });
   

}
  );


  $('#formEditaEspecies').submit(function(e){
    e.preventDefault();
    data = $(this).closest('form').serialize();
  
    // inputs = {};
    // data =  $('#formEditaEspecies').find('.modal-body').children().children().children('textarea, input');
    // delete data.length ;
    // delete data.prevObject ;
    // for (var [key, value] of Object.entries(data)) {
    //    var id =  value.getAttribute('id');
    //    inputs[id] = $('#'+id+'').val();
    // }
       $.ajax({
           url: "editaClientes",
           type: 'post',
           data,
           success: function(resposta){
            $('.bs-toast').removeClass('d-none');
            if(resposta=='true'){
              setTimeout(reload, 1000);
            }
            else {
            errorMessage('Ops.Não foi possível salvar as alterações. Certifique-se que o campo de código da espécie esteja preenchido.');
            }
          },
          error: function(resposta){
          errorMessage('Ops.Não foi possível salvar as alterações por erro interno do sistema. Entre em contato com o desenvolvedor');
          }
            
      });
  });

  function reload(){
    window.location.reload(true);
  }

  function errorMessage(mensagem){
    $('.bs-toast').removeClass('d-none');
    $('.bs-toast').removeClass('bg-sucess');
    $('.bs-toast').addClass('bg-danger');
    $('.toast-body').text(mensagem);
  }
  
function clickEdit(){
  $('.bx-edit-alt').click(function(e){
    e.preventDefault;
    var linha = $(this).parent().parent().parent().data();
    for (var [key, value] of Object.entries(linha)) {
      value = value.toString().replace('Ã©', 'é');
      value = value.replace('Ã§', 'ç');
      $('#'+key+'').val(value);
      if(key == 'nascimento') console.log(new Date(`${value}`));
       if(key == 'nascimento')document.getElementById('nascimento').valueAsDate = new Date(`${value}`);
       if(key == 'fisica_juridica')document.querySelector("input[value="+value+"]").setAttribute('checked','checked');
       
       
      } 
    
    }) 

  }
function clickDelete(){
  $('.bx-trash').click(function(e){
    e.preventDefault;
    var linha = $(this).parent().parent().parent().data('id');
    $('.deletarEspecie').attr('data-id',linha)
    
    }) 

  }

  $(document).ready(function(){
    clickEdit();
    clickDelete();
    historico();
    
  $("#cep").blur(function(){
				// Remove tudo o que não é número para fazer a pesquisa
				var cep = this.value.replace(/[^0-9]/, "");
				
				// Validação do CEP; caso o CEP não possua 8 números, então cancela
				// a consulta
				if(cep.length != 8){
					return false;
				}
				
				// A url de pesquisa consiste no endereço do webservice + o cep que
				// o usuário informou + o tipo de retorno desejado (entre "json",
				// "jsonp", "xml", "piped" ou "querty")
				var url = "https://viacep.com.br/ws/"+cep+"/json/";
				
				// Faz a pesquisa do CEP, tratando o retorno com try/catch para que
				// caso ocorra algum erro (o cep pode não existir, por exemplo) a
				// usabilidade não seja afetada, assim o usuário pode continuar//
				// preenchendo os campos normalmente
				$.getJSON(url, function(dadosRetorno){
					try{
						// Preenche os campos de acordo com o retorno da pesquisa
						$("#logradouro").val(dadosRetorno.logradouro);
						$("#bairro").val(dadosRetorno.bairro);
						$("#cidade").val(dadosRetorno.localidade);
						$("#uf").val(dadosRetorno.uf);
					}catch(ex){}
				});
			});
    $('.deletarEspecie').click(function(e){
      e.preventDefault;
      var codigo = $(this).data('id'); 
      $.ajax({
           url: "excluiClientes",
           type: 'post',
           data : {'codigo':codigo},
           success: function(resposta){
            $('.bs-toast').removeClass('d-none');
            if(resposta=='true'){
              setTimeout(reload, 1000);
            }
            else {
            errorMessage('Ops.Não foi deletar o registro. Tente novamente ou entre em contato com o desenvolvedor');
            }
          },
          error: function(resposta){
          errorMessage('Ops.Não foi possível deletar o registro por erro interno do sistema. Entre em contato com o desenvolvedor');
          }
      });
      }) 

      $('.nova_especie').click(function(){
        $.ajax({
           url: "editaClientes",
           type: 'post',
           data,
           success: function(resposta){
            $('.bs-toast').removeClass('d-none');
            if(resposta=='true'){
              setTimeout(reload, 1000);
            }
            else {
            errorMessage('Ops.Não foi possível salvar as alterações. Certifique-se que o campo de código da espécie esteja preenchido.');
            }
          },
          error: function(resposta){
          errorMessage('Ops.Não foi possível salvar as alterações por erro interno do sistema. Entre em contato com o desenvolvedor');
          }
      });
      })
  })
  </script>