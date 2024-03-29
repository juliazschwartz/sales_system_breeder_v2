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

    <title>Plantel - Estoque de Animais</title>

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
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Plantel /</span> Estoque de Animais</h4>
              

 
          

              <!-- Striped Rows -->
              <div class="card">
                <div class = "d-flex align-items-center mb-3">
                <div class="col-md mx-3">
                          <div class="form-check mt-3">
                            <input class="form-check-input" type="checkbox"  id="defaultCheck1" checked="" value="disponivel" oninput="filtraEstoque()">
                            <label class="form-check-label" for="defaultCheck1"> Disponíveis </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox"id="defaultCheck2" checked="" value="reservado" oninput="filtraEstoque()">
                            <label class="form-check-label" for="defaultCheck2"> Reservados </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="defaultCheck3" checked=""  value="vendido" oninput="filtraEstoque()">
                            <label class="form-check-label" for="defaultCheck3"> Vendidos </label>
                          </div>
                   
                        </div>
               
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
<div class="modal fade " id="modalCenter" tabindex="-1"  aria-hidden="true" role="dialog">
                          <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="modalCenterTitle">Nova Espécie</h5>
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
                                    <label for="nameWithTitle" class="form-label" >Nome Científico</label>
                                    <input type="text"  class="form-control" id = "cientifico" name="cientifico">
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col mb-3">
                                    <label for="nameWithTitle" class="form-label" >Nome Popular</label>
                                    <input type="text"  class="form-control" placeholder="" id = "popular" name="popular">
                                  </div>
                                </div>
                                
                                <div class="row">
                                  <div class="col mb-3">
                                    <label for="nameWithTitle" class="form-label" >Tipo de Marcação</label>
                                    <input type="text"  class="form-control" placeholder="" id = "marcacao" name="marcacao">
                                  </div>
                                </div>
                                
                                <div class="row">
                                  <div class="col mb-3">
                                    <label for="nameWithTitle" class="form-label">Código</label>
                                    <input type="text"  class="form-control" placeholder="" id = "codigo" name = "codigo">
                                  </div>
                                </div>
                                
                                <div class="row">
                                  <div class="col mb-3">
                                    <label for="nameWithTitle" class="form-label" >NCM</label>
                                    <input type="text"  class="form-control" placeholder="" id = "ncm" name ="ncm">
                                  </div>
                                </div>
                                
                                <div class="row">
                                  <div class="col mb-3">
                                    <label for="nameWithTitle" class="form-label">Base de Cálculo NCM</label>
                                    <input type="text"  class="form-control" placeholder=""  id = "base" name ="base">
                                  </div>
                                </div>
                                <div class = "row">
                                <div class="col mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label" >Descrição na Nota</label>
                        <textarea class="form-control" rows="3" id = "descricao"></textarea>
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
                                <button type="submit" class="btn btn-primary editarEspecie">Cadastrar</button>
                              </div>
                            </form>
                            </div>
                          </div>
                        </div>


                        <div class="modal fade" id="modalToggle" aria-labelledby="modalToggleLabel" tabindex="-1" aria-hidden="true" role="dialog">
                          <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="modalToggleLabel">Deletar Espécie</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">Tem certeza que deseja deletar esse registro de espécie?.</div>
                              <div class="modal-footer">
                                <button class="btn btn-danger deletarEspecie" data-bs-target="#modalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">
                                  Deletar
                                </button>
                              </div>
                            </div>
                          </div>
                        </div>
                <div class="table-responsive text-nowrap">
              
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th>Espécie <a class='bx bx-sort' href="?par=nome_cientifico&order=<?=$order?>" ></a></th>
                        <th>Sexo <a class='bx bx-sort' href="?par=sexo&order=<?=$order?>" ></a></th></th>
                        <th>Marcação <a class='bx bx-sort' href="?par=numeracao&order=<?=$order?>" ></a></th></th>
                        <th>Data Nascimento</a></th></th>
                        <th>Status</th>
                        <th>Preço de Compra <a class='bx bx-sort' href="?par=valor_un&order=<?=$order?>" ></a></th>
                 
                        <th></th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        <?php foreach($animais as $animal){
                            // $animal['status'] == 'vendido' ? $classe = "d-none" : $classe = '';
                            
?>

<tr data-nome_cientifico=<?=$animal['nome_cientifico']?> data-sexo="<?=$animal['sexo']?>" data-numeracao="<?=$animal['numeracao']?>" data-nascimento="<?=$animal['nascimento']?>" data-status="<?=$animal['status']?>" data-valor_un="<?=$animal['valor_un']?>">
                        <td><?= $animal['nome_cientifico']?></td>
                        <td><strong><?= utf8_decode($animal['sexo'])?><strong></td>
                        <td><strong><?= utf8_decode($animal['numeracao'])?><strong></td>
                        <td><strong><?= utf8_decode($animal['nascimento'])?><strong></td>
                        <td><strong><?= utf8_decode($animal['status'])?><strong></td>
                        <td><strong><?= utf8_decode($animal['valor_un'])?><strong></td>
                     
                        <!-- <td>
                        <a class="text-center" href="javascript:void(0);"
                                ><i class="bx bx-edit-alt me-1 icone-tabela" data-bs-toggle="modal" data-bs-target="#modalCenter"></i> </a  >
                        </td> -->

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
                  <!-- footer -->

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
  $('#formBuscaEspecies').submit(function(e)
  {
//     var mapObj = {
//     Ã©:"é",
//     Ã§:"Ç"
// };

    e.preventDefault();
    var url = $(this).closest('form').attr('action'),
    data = $(this).closest('form').serialize();
    $.ajax({
        url: "buscaEstoque",
        type: 'post',
        data: data,
        success: function(resposta){
          // var tbody = "<tr><td></td><td><strong><strong></td> <td><strong><strong></td><td>Indefinido</td><td>Indefinido</td><td><a class='text-center' href='javascript:void(0);'><i class='bx bx-edit-alt me-1 icone-tabela'></i> </a  ></td> <td>  <a class='text-center' href='javascript:void(0);'><i class='bx bx-trash me-1 icone-tabela'></i> </a></td></tr>"
          $('tbody').html('');
          
          var html = "<div class='alert alert-dark alert-dismissible m-3' role='alert'> Nenhum Registro Encontrado <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button></div>";
           if(resposta!= '[]'){
            var tbody = JSON.parse(resposta).forEach((res)=> {
            var nome_popular = res.nome_popular.replace('Ã©', 'é');
            nome_popular = nome_popular.replace('Ã§', 'ç');
            var sexo = res.sexo.replace('Ãª', 'ê');
            $('tbody').append("<tr <tr ><td>"+res.nome_cientifico+"</td><td>"+sexo+"</td><td><strong>"+res.numeracao+"</strong></td><td>"+res.nascimento+"</td><td><strong>"+res.status+"</strong></td><td>"+res.valor_un+"</td><td><a class='text-center'href='javascript:void(0);'><i class='bx bx-edit-alt  me-1 icone-tabela' data-bs-toggle='modal' data-bs-target='#modalCenter'></i> </a> </td><td><a class='text-center'href='javascript:void(0);'><i class='bx bx-trash me-1 icone-tabela' data-bs-toggle='modal' data-bs-target='#modalToggle'></i> </a> </td></tr>")
          });
            $('tbody').html(tbody);
            
          }
          else $(html).insertAfter('.align-items-baseline');
          clickEdit();
          clickDelete();
          var dados = {};
  var data = $('tbody').find('tr');
    delete data.length ;
    delete data.prevObject ;
  for (var [key, value] of Object.entries(data)) {
    dados[key]= {'codigo;': value.getAttribute('data-codigo')+';', 'nome_cientifico;': value.getAttribute('data-cientifico')+';','nome_popular;' :  value.getAttribute('data-popular')+';' };
      } ;
      $("#content-excel").val(JSON.stringify(dados));
       }
   });
});


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
           url: "editaEspecies",
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


  function filtraEstoque(){
   var checked =  $('.form-check').find('input:checked');
   var checados = {};
   delete checked.length ;
    delete checked.prevObject ;
   for (var [key, value] of Object.entries(checked)) {
    checados[key]= {valor: value.value}
   }
    $.ajax({
           url: "filtraEstoque",
           type: 'post',
           data : checados,
           success: function(resposta){
            // $('.bs-toast').removeClass('d-none');
            // console.log(resposta.length);
            $('tbody').html('');
            var tbody = JSON.parse(resposta).forEach((res)=> {
              console.log(res);
            var sexo = res.sexo.replace('Ãª', 'ê');
                        $('tbody').append("<tr <tr ><td>"+res.nome_cientifico+"</td><td>"+sexo+"</td><td><strong>"+res.numeracao+"</strong></td><td>"+res.nascimento+"</td><td><strong>"+res.status+"</strong></td><td>"+res.valor_un+"</td></tr>")
                      });
                        $('tbody').html(tbody);
                        var data = $('tbody').find('tr');
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


  
  function reload(){
    window.location.reload(true);
  }

  function errorMessage(mensagem){
    $('.bs-toast').removeClass('d-none');
    $('.bs-toast').removeClass('bg-sucess');
    $('.bs-toast').addClass('bg-danger');
    $('.toast-body').text(mensagem);
  }
  
// function clickEdit(){
//   $('.bx-edit-alt').click(function(e){
//     e.preventDefault;
//     var linha = $(this).parent().parent().parent().data();
//     for (var [key, value] of Object.entries(linha)) {
//         value = value.toString().replace('Ã©', 'é');
//         value = value.replace('Ã§', 'ç');
//        $('#'+key+'').val(value);
//         } 
    
//     }) 

//   }
function clickDelete(){
  $('.bx-trash').click(function(e){
    e.preventDefault;
    var linha = $(this).parent().parent().parent().data('codigo');
    $('.deletarEspecie').attr('data-codigo',linha)
    
    }) 

  }

  $(document).ready(function(){
    clickEdit();
    clickDelete();
    $('.deletarEspecie').click(function(e){
      e.preventDefault;
      var codigo = $(this).data('codigo'); 
      $.ajax({
           url: "excluiEspecies",
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
          document.getElementById('formEditaEspecies').reset();
      })


      $('.downloadPlanilha').click(function(){
  var dados = {};
  var data = $('tbody').find('tr');
    delete data.length ;
    delete data.prevObject ;
  for (var [key, value] of Object.entries(data)) {
    dados[key]= {'codigo;': value.getAttribute('data-codigo')+';', 'nome_cientifico;': value.getAttribute('data-cientifico')+';','nome_popular;' :  value.getAttribute('data-popular')+';'
      ,'marcacao;' :  value.getAttribute('data-marcacao')+';', 'ncm' : value.getAttribute('data-ncm')+';', 'base_calculo' : value.getAttribute('data-base')+';' };
      } ;
      $.ajax({
          url: "exportDataExcel?"+dados,
          type: 'get',
          data: dados,
          beforeSend: function (jqXHR, settings) {
         window.result_url = settings.url + "?" + settings.data;
  },
          success: function(resposta){
            console.log(result_url);
           $('.bs-toast').removeClass('d-none');
           window.location.replace("https://sistema_vendas_comfauna_2.0.test/"+window.result_url);
         },
           
      });
});


  })
  </script>