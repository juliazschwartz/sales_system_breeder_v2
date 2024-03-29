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

    <title>Loja - Vendas</title>

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
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Loja /</span> Vendas</h4>
              

 
          

              <!-- Striped Rows -->
              <div class="card">
              <div class="col-md mx-3">
                          <div class="form-check mt-3">
                            <input class="form-check-input" type="checkbox" id="defaultCheck1" checked="" value="Venda Finalizada" oninput="filtraEstoque()">
                            <label class="form-check-label" for="defaultCheck1"> Vendas Finalizadas </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="defaultCheck2" checked="" value="Venda incompleta" oninput="filtraEstoque()">
                            <label class="form-check-label" for="defaultCheck2"> Vendas Incompletas </label>
                          </div>
                   
                        </div>
                <div class = "d-flex align-items-center ">
           
                
                
                  <h5 class="card-header">
            
                <button type="button" class="btn btn-primary nova_especie" data-bs-toggle="modal" data-bs-target="#modalCenter">Nova Venda</button></h5>
               
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
                                <h5 class="modal-title" id="modalCenterTitle">Nova Venda</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <form id="formIniciaVenda">
                              <div class="modal-body">
                                <div class="row d-none">
                                  <div class="col mb-3">
                                    <label for="nameWithTitle" class="form-label" ></label>
                                    <input type="hidden"  class="form-control" id = "id" name="id">
                                  </div>
                                </div>
                                <div class="row">
                                <div class="col mb-3">
                        <label for="defaultSelect" class="form-label">Selecione o Cliente</label>
                        <select id="cliente" class="form-select" name="cliente">
                          <?php foreach($clientes as $cliente){
                            ?>
                          <option value="<?=$cliente['nome']?>"><?=$cliente['nome']?></option>
                          <?php } ?>
                        </select>
                      </div>
                                <div class="col mb-3">
                        <label for="defaultSelect" class="form-label">Selecione o destino</label>

                        <select id="tipo_cliente" class="form-select" name="tipo_cliente">
                          <option value="0">Cliente Final</option>
                          <option value="1">Cliente Revenda</option>
                        </select>
                      </div>
                      <div class="col mb-3"> 
                                <label for="defaultSelect" class="form-label">Frete por conta do:</label>
                                <select id="frete" class="form-select" name="frete">
                                <option value="0">Emitente</option>
                          <option value="1">Destinatário</option>
                         
                        </select>

                          </div>
                                </div>

                                <div class="row">
                               
                                <div class="col mb-3"> 
                                <label for="defaultSelect" class="form-label" >Exemplar</label>
                                <select id="selectExemplar" class="form-select" name="exemplar">
                                <?php foreach($exemplares as $exemplar){
                            ?>
                          <option value="<?=$exemplar['id_produto']?>"><?=$exemplar['nome_cientifico'].'-'.$exemplar['numeracao']?></option>
                          <?php } ?>
                     
                        </select>

                          </div>
                        
                          <div class="col mb-3">
                                    <label for="nameWithTitle" class="form-label">Preço do Exemplar</label>
                                    <input type="text" class="form-control" placeholder="" id="inscricao" name="preco_exemplar" onkeypress="return(MascaraMoeda(this,'',',',event))">
                                  </div>
                                  <div class="col mb-3">
                                  <button type="submit" class="btn btn-primary editarCliente" style="margin-top:30px">incluir</button>         
                        
                          </div>
                          </div>
                        
                              </div>
                              <div class="table-inclusos modal-body">
                                <h5 class = "modal-header">Exemplares Inclusos</h5>
                              <div class="table-responsive ">
                  <table class="table table-hover inclusos_table">
                    <thead>
                      <tr>
                        <th>Espécie</th>
                        <th>Identificação</th>
                        <th>Quantidade</th>
                        <th>Preço</th>
                        <th></th>
                    </thead>
                    <tbody class="table-border-bottom-0">
                      <tr>
                        <td><strong></strong></td>
                        <td><strong></strong></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr class="table-success">
                        <td>
                          <strong>TOTAL:</strong>
                        </td>
                        <td id="valor_total">
                        </td>
              
                      </tr>
                 
                    </tbody>
                  </table>
                </div>
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
                  <table class="table table-striped table-vendas">
                    <thead>
                      <tr>
                        <th>Cliente<a class='bx bx-sort' href="?par=cliente&order=<?=$order?>"></a></th>
                        <th>CPF/CNPJ</th></th>
                        <th>Data Pedido <a class='bx bx-sort' href="?par=id_os&order=<?=$order?>"></a></th></th>
                        <th>Valor Total  <a class='bx bx-sort' href="?par=valor_total&order=<?=$order?>"></th>
                        <th >Status</th></th>
                        <th>Forma de Pagamento</th>
                        <th>Operador</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        <?php foreach($os as $venda){
                            $venda['status'] == 'Venda Finalizada'? $classe = 'bg-success' :  $classe ='bg-warning';
                            utf8_decode($venda['forma_pagamento']) == 'avista' ? $forma_pagamento = 'à vista' : $forma_pagamento =  utf8_decode($venda['forma_pagamento']);
?>
<tr data-id='<?=$venda['id_os']?>' data-cliente='<?=$venda['cliente']?>' data-cpf_cnpj='<?=$venda['cpf_cnpj']?>' data-data_pedido="<?=$venda['data_pedido']?> "
data-valor_entrega="<?=$venda['valor_total']?>" 
data-status="<?=$venda['status']?>" 
data-forma_pagamento="<?=$venda['forma_pagamento']?>">
                      
                        <td style = "padding: 0 46px;"><?= str_replace('Ãâ', 'Ô', utf8_encode($venda['cliente']))?></td>
                        <td ><strong><?= utf8_decode($venda['cpf_cnpj'])?></strong></td>
                        <td style = "padding: 0 33px;"><?= utf8_decode($venda['data_pedido'])?></td>
                        <td style = "padding: 0 33px;"><?= utf8_decode($venda['valor_total'])?></td>
                        <td><span class="badge <?=$classe?>"><?= utf8_decode($venda['status'])?></span></td>
                        <td><?= $forma_pagamento?></td>
                        <td class = "operador"><?= $venda['operador']?></td>
                       
                        
                        <td>
                        <a class="text-center" href="javascript:void(0);"
                                ><i class="bx bx-edit-alt me-1 icone-tabela" data-bs-toggle="modal" data-bs-target="#modalCenter"></i> </a  >
                        </td>

                        <td>  
                        <a class="text-center" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#modalToggle"
                                ><i class="bx bx-trash me-1 icone-tabela"></i> </a
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
       
function filtraEstoque(){
   var checked =  $('.col-md').find('.form-check').find('input:checked');
   var checados = {};
   delete checked.length ;
    delete checked.prevObject ;
   for (var [key, value] of Object.entries(checked)) {
    checados[key]= {valor: value.value}
   }
    $.ajax({
           url: "filtraVendas",
           type: 'post',
           data : checados,
           success: function(resposta){
            // $('.bs-toast').removeClass('d-none');
            // console.log(resposta.length);
            $('tbody').html('');
            var tbody = JSON.parse(resposta).forEach((res)=> {
              res.status == 'Venda Finalizada'?  classe = 'success' :  classe = 'danger';
              res.forma_pagamento == 'avista' ?  res.forma_pagamento = 'à vista' : res.forma_pagamento = res.forma_pagamento;

            $('.table-vendas').find('tbody').append("<tr><td><strong>"+res.cliente+"</strong></td><td><strong>"+res.cpf_cnpj+"<strong></td><td><strong>"+res.data_pedido+"<strong></td><td>"+res.valor_total+"</td><td><span class='badge bg-"+classe+"'>"+res.status+"</span></td><td>"+res.forma_pagamento+"</td><td><a class='text-center'href='javascript:void(0);'><i class='bx bx-edit-alt  me-1 icone-tabela' data-bs-toggle='modal' data-bs-target='#modalCenter'></i> </a> </td><td><a class='text-center'href='javascript:void(0);'><i class='bx bx-trash me-1 icone-tabela' data-bs-toggle='modal' data-bs-target='#modalToggle'></i> </a> </td></tr>")
                      });
                        $('tbody').html(tbody);
                        var data =  $('.table-vendas').find('tbody').find('tr');
    delete data.length ;
    delete data.prevObject ;
  for (var [key, value] of Object.entries(data)) {
    dados[key]= {'codigo;': value.getAttribute('data-codigo')+';', 'nome_cientifico;': value.getAttribute('data-cientifico')+';','nome_popular;' :  value.getAttribute('data-popular')+';' };
      } ;
      $("#content-excel").val(JSON.stringify(dados));
          },
          
          // error: function(resposta){
          // errorMessage('Ops.Não foi possível filtrar por erro interno do sistema. Entre em contato com o desenvolvedor');
          // }
          
      });
}
function MascaraMoeda(objTextBox, SeparadorMilesimo, SeparadorDecimal, e) {
                    var sep = 0;
                    var key = '';
                    var i = j = 0;
                    var len = len2 = 0;
                    var strCheck = '0123456789';
                    var aux = aux2 = '';
                    var whichCode = (window.Event) ? e.which : e.keyCode;
                    if (whichCode == 13)
                        return true;
                    key = String.fromCharCode(whichCode); // Valor para o código da Chave
                    if (strCheck.indexOf(key) == -1)
                        return false; // Chave inválida
                    len = objTextBox.value.length;
                    for (i = 0; i < len; i++)
                        if ((objTextBox.value.charAt(i) != '0') && (objTextBox.value.charAt(i) != SeparadorDecimal))
                            break;
                    aux = '';
                    for (; i < len; i++)
                        if (strCheck.indexOf(objTextBox.value.charAt(i)) != -1)
                            aux += objTextBox.value.charAt(i);
                    aux += key;
                    len = aux.length;
                    if (len == 0)
                        objTextBox.value = '';
                    if (len == 1)
                        objTextBox.value = '0' + SeparadorDecimal + '0' + aux;
                    if (len == 2)
                        objTextBox.value = '0' + SeparadorDecimal + aux;
                    if (len > 2) {
                        aux2 = '';
                        for (j = 0, i = len - 3; i >= 0; i--) {
                            if (j == 3) {
                                aux2 += SeparadorMilesimo;
                                j = 0;
                            }
                            aux2 += aux.charAt(i);
                            j++;
                        }
                        objTextBox.value = '';
                        len2 = aux2.length;
                        for (i = len2 - 1; i >= 0; i--)
                            objTextBox.value += aux2.charAt(i);
                        objTextBox.value += SeparadorDecimal + aux.substr(len - 2, len);
                    }
                    return false;
                }

// function historico(){
//   $('.historicoCliente').click(function(){
//     var cpf = $(this).parent().parent().data('cpf_cnpj');
//     $.ajax({
//         url: "historicoClientes",
//         type: 'post',
//         data: {data:cpf},
//         success: function(resposta){
//           var html = "<div class='alert alert-dark alert-dismissible m-3' role='alert'> Nenhum Registro Encontrado <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button></div>";
//            if(resposta!= '[]'){ 
//              $('#modalHistorico').find('tbody').html('');

//             var tbody = JSON.parse(resposta).forEach((res)=> {
//               res.status == 'nfe_emitida' ?  classe = 'success' :  classe = 'danger';
//               res.forma_pagamento == 'avista' ?  res.forma_pagamento = 'à vista' : res.forma_pagamento = res.forma_pagamento;
//             $('#modalHistorico').find('tbody').append("<tr data-id_os = "+res.id_os+"><td><strong>"+res.cliente+"</strong></td><td><strong>R$ "+res.cpf_cnpj+"<strong></td><td><span class='badge bg-label-"+classe+" me-1'>"+res.data_pedido+"</span></td><td>"+res.valor_total+"</td><td>"+res.status+"</td></tr>")
//           });
//        }
//       }
//    });
   
//       })
      
      
// }
$('#selectExemplar').change(function(){
          var id_produto = $(this).val();
        $.ajax({
            				type:'POST',
            				url:'buscaPrecoExemplar',
            				data:{'id_produto': id_produto},
            				dataType:'html',
            				success:function(txt){
                    								$('#inscricao').val(JSON.parse(txt)[0].valor_un);
                									}
       						 })
        });
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
        url: "buscaVendas",
        type: 'post',
        data: data,
        success: function(resposta){
          // var tbody = "<tr><td></td><td><strong><strong></td> <td><strong><strong></td><td>Indefinido</td><td>Indefinido</td><td><a class='text-center' href='javascript:void(0);'><i class='bx bx-edit-alt me-1 icone-tabela'></i> </a  ></td> <td>  <a class='text-center' href='javascript:void(0);'><i class='bx bx-trash me-1 icone-tabela'></i> </a></td></tr>"
          $('.table-vendas').find('tbody').html('');
          
          var html = "<div class='alert alert-dark alert-dismissible m-3' role='alert'> Nenhum Registro Encontrado <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button></div>";
           if(resposta!= '[]'){
            var tbody = JSON.parse(resposta).forEach((res)=> {
    
              res.status == 'Venda Finalizada'?  classe = 'success' :  classe = 'danger';
              res.forma_pagamento == 'avista' ?  res.forma_pagamento = 'à vista' : res.forma_pagamento = res.forma_pagamento;

            $('.table-vendas').find('tbody').append("<tr><td><strong>"+res.cliente+"</strong></td><td><strong>"+res.cpf_cnpj+"<strong></td><td><strong>"+res.data_pedido+"<strong></td><td>"+res.valor_total+"</td><td><span class='badge bg-"+classe+"'>"+res.status+"</span></td><td>"+res.forma_pagamento+"</td><td><a class='text-center'href='javascript:void(0);'><i class='bx bx-edit-alt  me-1 icone-tabela' data-bs-toggle='modal' data-bs-target='#modalCenter'></i> </a> </td><td><a class='text-center'href='javascript:void(0);'><i class='bx bx-trash me-1 icone-tabela' data-bs-toggle='modal' data-bs-target='#modalToggle'></i> </a> </td></tr>")
          
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


  $('#formIniciaVenda').submit(function(e){
    e.preventDefault();
    data = $(this).closest('form').serialize();
   
       $.ajax({
           url: "novaVenda",
           type: 'post',
           data,
           success: function(resposta){
            $('.bs-toast').removeClass('d-none');
            if(resposta=='true'){
            $('.inclusos_table').find('tbody').append("<tr><td><strong>"+res.cliente+"</strong></td><td><strong>"+res.cpf_cnpj+"<strong></td><td><strong>"+res.data_pedido+"<strong></td><td>"+res.valor_total+"</td><td><span class='badge bg-"+classe+"'>"+res.status+"</span></td><td>"+res.forma_pagamento+"</td><td><a class='text-center'href='javascript:void(0);'><i class='bx bx-edit-alt  me-1 icone-tabela' data-bs-toggle='modal' data-bs-target='#modalCenter'></i> </a> </td><td><a class='text-center'href='javascript:void(0);'><i class='bx bx-trash me-1 icone-tabela' data-bs-toggle='modal' data-bs-target='#modalToggle'></i> </a> </td></tr>")

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