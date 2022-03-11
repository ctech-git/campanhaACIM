<!doctype html>
<html class="no-js" lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Movimentações Financeiras</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- favicon
  ============================================ -->
  <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
  <!-- Google Fonts
  ============================================ -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
  <!-- Bootstrap CSS
  ============================================ -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- Bootstrap CSS
  ============================================ -->
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <!-- owl.carousel CSS
  ============================================ -->
  <link rel="stylesheet" href="css/owl.carousel.css">
  <link rel="stylesheet" href="css/owl.theme.css">
  <link rel="stylesheet" href="css/owl.transitions.css">
  <!-- animate CSS
  ============================================ -->
  <link rel="stylesheet" href="css/animate.css">
  <!-- normalize CSS
  ============================================ -->
  <link rel="stylesheet" href="css/normalize.css">
  <!-- meanmenu icon CSS
  ============================================ -->
  <link rel="stylesheet" href="css/meanmenu.min.css">
  <!-- main CSS
  ============================================ -->
  <link rel="stylesheet" href="css/main.css">
  <!-- educate icon CSS
  ============================================ -->
  <link rel="stylesheet" href="css/educate-custon-icon.css">
  <!-- morrisjs CSS
  ============================================ -->
  <link rel="stylesheet" href="css/morrisjs/morris.css">
  <!-- mCustomScrollbar CSS
  ============================================ -->
  <link rel="stylesheet" href="css/scrollbar/jquery.mCustomScrollbar.min.css">
  <!-- metisMenu CSS
  ============================================ -->
  <link rel="stylesheet" href="css/metisMenu/metisMenu.min.css">
  <link rel="stylesheet" href="css/metisMenu/metisMenu-vertical.css">
  <!-- calendar CSS
  ============================================ -->
  <link rel="stylesheet" href="css/calendar/fullcalendar.min.css">
  <link rel="stylesheet" href="css/calendar/fullcalendar.print.min.css">
  <!-- forms CSS
  ============================================ -->
  <link rel="stylesheet" href="css/form/all-type-forms.css">
  <!-- dropzone CSS
  ============================================ -->
  <link rel="stylesheet" href="css/dropzone/dropzone.css">
  <!-- style CSS
  ============================================ -->
  <link rel="stylesheet" href="style.css">
  <!-- responsive CSS
  ============================================ -->
  <link rel="stylesheet" href="css/responsive.css">
  <!-- modernizr JS
  ============================================ -->
  <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body >
  <!--[if lt IE 8]>
  <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
  <![endif]-->
  <!-- Start Left menu area -->
  <?php require_once('menu.html'); ?>
  <!-- End Left menu area -->
  <!-- Start Welcome area -->
  <div class="all-content-wrapper">
    <div class="container-fluid" >
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="logo-pro">
            <!-- <a href="index.html"><img class="main-logo" src="img/logo/logo.png" alt="" /></a> -->
          </div>
        </div>
      </div>
    </div>
    <!-- </div> -->
    <!-- Single pro tab review Start-->
    <div class="single-pro-review-area mt-t-30 mg-b-15" style='margin-top:50px'>
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="product-payment-inner-st">
              <ul id="myTabedu1" class="tab-review-design">
                <li><a href="#description">Adicionar Eventos</a></li>
                <li class="active"><a href="#reviews">Ações</a></li>
                <li><a href="#information">Relatórios</a></li>
              </ul>
              <div id="myTabContent" class="tab-content custom-product-edit">
                <div class="product-tab-list tab-pane fade in" id="description">
                  <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                      <div class="review-content-section">
                        <div id="dropzone1" class="pro-ad">
                          <form class="dropzone dropzone-custom needsclick add-professors" id="myForm1">
                            <div class="row">
                              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

                                <div class="form-group">
                                  <input  required name="descricao" autocomplete="off" id="descricao" type="text" class="form-control" placeholder="Descrição do evento. Exemplo: Entrega de panfleto">
                                </div>
                                <div class="form-group">
                                  <input  required name="valor" id="valor" type="text" class="form-control" placeholder="Valor R$">
                                </div>
                                <!-- <div class="form-group">
                                  <input  required name="categoria" autocomplete="off" id="categoria" type="text" class="form-control" placeholder="Categoria">
                                </div> -->

                                <!-- <div class="form-group">
                                <input required name="data_vencimento" id="data_vencimento" type="date" class="form-control" placeholder="Data de Vencimento">
                              </div> -->
                              <div class="form-group">
                                <select required name="empresa" id="empresa" class="form-control">
                                  <option selected value="1">Futuro Técnico</option>
                                </select>
                              </div>
                              <!-- <div class="form-group alert-up-pd">
                              <div class="dz-message needsclick download-custom">
                              <i class="fa fa-download edudropnone" aria-hidden="true"></i>
                              <h2 class="edudropnone">Adicione o boleto ou nota fiscal aqui.</h2>

                            </p>
                            <input name="imageico" class="hd-pro-img" type="text" />
                          </div>
                        </div> -->
                      </div>
                      <!-- <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                      <div class="form-group">
                      <input name="department" type="text" class="form-control" placeholder="Department">
                    </div>
                    <div class="form-group res-mg-t-15">
                    <textarea name="description" placeholder="Description"></textarea>
                  </div>
                  <div class="form-group">
                  <select name="gender" class="form-control">
                  <option value="none" selected="" disabled="">Select Gender</option>
                  <option value="0">Male</option>
                  <option value="1">Female</option>
                </select>
              </div>
              <div class="form-group">
              <select name="country" class="form-control">
              <option value="none" selected="" disabled="">Select country</option>
              <option value="0">India</option>
              <option value="1">Pakistan</option>
              <option value="2">Amerika</option>
              <option value="3">China</option>
              <option value="4">Dubai</option>
              <option value="5">Nepal</option>
            </select>
          </div>
          <div class="form-group">
          <select name="state" class="form-control">
          <option value="none" selected="" disabled="">Select state</option>
          <option value="0">Gujarat</option>
          <option value="1">Maharastra</option>
          <option value="2">Rajastan</option>
          <option value="3">Maharastra</option>
          <option value="4">Rajastan</option>
          <option value="5">Gujarat</option>
        </select>
      </div>
      <div class="form-group">
      <select name="city" class="form-control">
      <option value="none" selected="" disabled="">Select city</option>
      <option value="0">Surat</option>
      <option value="1">Baroda</option>
      <option value="2">Navsari</option>
      <option value="3">Baroda</option>
      <option value="4">Surat</option>
    </select>
  </div>
  <div class="form-group">
  <input name="website" type="text" class="form-control" placeholder="Website URL">
</div>
</div> -->
</div>
<div class="row">
  <div class="col-lg-12">
    <div class="payment-adress">
      <button type="submit" class="btn btn-primary waves-effect waves-light">Adicionar</button>
    </div>
  </div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>

<div class="product-tab-list tab-pane fade active in" id="reviews">
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <div class="review-content-section">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
            <div class="devit-card-custom">

              <div class="form-group">
                <select required name="empresa" id="empresa" class="form-control">
                  <option selected value="1">Futuro Técnico</option>
                </select>
              </div>

              <div class="form-group">
                <select required name="eventos" id="eventos" class="form-control">
                  <!-- <option value="none" selected="" disabled="">Selecione o tipo</option> -->
                  <option value="saida">Selecione o evento</option>
                  <!-- <option value="1">Saída</option> -->
                </select>
              </div>
              <div class="row" style='margin-top: 50px'>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                  <label class="login2 pull-right-pro">Selecione quem participou </label>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
                  <div class="bt-df-checkbox" id='check_funcionarios'>


                          </div>
                        </div>
                      </div>

                      <a href="#!" onclick='salvar_acao()' class="btn btn-primary waves-effect float-right waves-light">Adicionar</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="product-tab-list tab-pane fade " id="information">
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <div class="review-content-section">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="data-table-area mg-b-15">
                      <div class="container-fluid">
                        <div class="row">
                          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="sparkline13-list">
                              <div class="sparkline13-hd">
                                <div class="main-sparkline13-hd">
                                  <h1>Projects <span class="table-project-n">Data</span> Table</h1>
                                </div>
                              </div>
                              <div class="sparkline13-graph">
                                <div class="datatable-dashv1-list custom-datatable-overright">
                                  <div id="toolbar">
                                    <select class="form-control dt-tb">
                                      <option value="">Export Basic</option>
                                      <option value="all">Export All</option>
                                      <option value="selected">Export Selected</option>
                                    </select>
                                  </div>
                                  <table id="table" data-toggle="table" data-pagination="true" data-search="true"
                                  data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true"
                                  data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                                  data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true"
                                  data-toolbar="#toolbar">

                                </table>

                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</div>
<div class="footer-copyright-area">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="footer-copy-right">
          <p>Copyright © 2018. All rights reserved. Template by <a href="https://colorlib.com/wp/templates/">Colorlib</a></p>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

<!-- jquery
============================================ -->
<script src="js/vendor/jquery-1.12.4.min.js"></script>
<!-- bootstrap JS
============================================ -->
<script src="js/bootstrap.min.js"></script>
<!-- wow JS
============================================ -->
<script src="js/wow.min.js"></script>
<!-- price-slider JS
============================================ -->
<script src="js/jquery-price-slider.js"></script>
<!-- meanmenu JS
============================================ -->
<script src="js/jquery.meanmenu.js"></script>
<!-- owl.carousel JS
============================================ -->
<script src="js/owl.carousel.min.js"></script>
<!-- sticky JS
============================================ -->
<script src="js/jquery.sticky.js"></script>
<!-- scrollUp JS
============================================ -->
<script src="js/jquery.scrollUp.min.js"></script>
<!-- mCustomScrollbar JS
============================================ -->
<script src="js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="js/scrollbar/mCustomScrollbar-active.js"></script>
<!-- metisMenu JS
============================================ -->
<script src="js/metisMenu/metisMenu.min.js"></script>
<script src="js/metisMenu/metisMenu-active.js"></script>
<!-- morrisjs JS
============================================ -->
<script src="js/sparkline/jquery.sparkline.min.js"></script>
<script src="js/sparkline/jquery.charts-sparkline.js"></script>
<!-- calendar JS
============================================ -->
<script src="js/calendar/moment.min.js"></script>
<script src="js/calendar/fullcalendar.min.js"></script>
<script src="js/calendar/fullcalendar-active.js"></script>
<!-- maskedinput JS
============================================ -->
<!-- <script src="js/jquery.maskedinput.min.js"></script> -->
<!-- <script src="js/masking-active.js"></script> -->
<!-- datepicker JS
============================================ -->
<script src="js/datepicker/jquery-ui.min.js"></script>
<script src="js/datepicker/datepicker-active.js"></script>
<!-- form validate JS
============================================ -->
<script src="js/form-validation/jquery.form.min.js"></script>
<script src="js/form-validation/jquery.validate.min.js"></script>
<script src="js/form-validation/form-active.js"></script>
<!-- dropzone JS
============================================ -->
<!-- <script src="js/dropzone/dropzone.js"></script> -->
<!-- tab JS
============================================ -->
<script src="js/tab.js"></script>
<!-- plugins JS
============================================ -->
<script src="js/plugins.js"></script>
<!-- main JS
============================================ -->
<script src="js/main.js"></script>
<script src="js/acoes.js"></script>
<!-- tawk chat JS
============================================ -->
<!-- <script src="js/tawk-chat.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js" integrity="sha256-Kg2zTcFO9LXOc7IwcBx1YeUBJmekycsnTsq2RuFHSZU=" crossorigin="anonymous"></script></body>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

<!-- data table JS
============================================ -->
<script src="js/data-table/bootstrap-table.js"></script>
<script src="js/data-table/tableExport.js"></script>
<script src="js/data-table/data-table-active.js"></script>
<script src="js/data-table/bootstrap-table-editable.js"></script>
<script src="js/data-table/bootstrap-editable.js"></script>
<script src="js/data-table/bootstrap-table-resizable.js"></script>
<script src="js/data-table/colResizable-1.5.source.js"></script>
<script src="js/data-table/bootstrap-table-export.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"></script>

<!--
<link href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css" rel="stylesheet">
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/plug-ins/1.10.20/i18n/Portuguese-Brasil.json"></script> -->
<!-- <link rel="stylesheet" href="css/data-table/bootstrap-table.css"> -->
<!-- <link rel="stylesheet" href="css/data-table/bootstrap-editable.css"> -->

</html>

<script>
function excluir_movimento(id){
  Swal.fire({
    title: 'Você tem certeza??',
    text: "Não há como voltar atrás!",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Sim, delete!'
  }).then((result) => {
    if (result.value) {
      $.ajax({
        url: "ControlHost/excluir_movimentacao.php",
        async:false,
        dataType:'json',
        data:{
          id:id
        },
        success: function( data ) {
        }
      });
      Swal.fire(
        'Deletado!',
        'Seu arquivo foi deletado.',
        'success'
      )
    }
  })

}
$( document ).ready(function() {

  $('#valor').mask('#.##0,00', {reverse: true});
  preencher_select_eventos();
  checkbox_colaboradores();
  preencher_tabela_relatorios();
  // $('#descricao').typeahead({
  //   source: function(query, result)
  //   {
  //     $.ajax({
  //       url:"ControlHost/fornecedores.php",
  //       method:"POST",
  //       data:{query:query},
  //       dataType:"json",
  //       success:function(data)
  //       {
  //         result($.map(data, function(item){
  //           return item;
  //         }));
  //       }
  //     })
  //   }
  // });

  $('#categoria').typeahead({
    source: function(query, result)
    {
      $.ajax({
        url:"ControlHost/categorias.php",
        method:"POST",
        data:{query:query},
        dataType:"json",
        success:function(data)
        {
          result($.map(data, function(item){
            return item;
          }));
        }
      })
    }
  });
});

// $('#table').on('editable-save.bs.table', function(field, row, oldValue, $el){
//   var id= oldValue.id;
//   var descricao= oldValue.descricao;
//   var tipodocumento= oldValue.tipodocumento;
//   var numerodocumento= oldValue.numerodocumento;
//   var valor= oldValue.valor;
//   valor = valor.replace('.','');
//   valor = valor.replace(',','.');
//   var categoria= oldValue.categoria;
//   var datavencimento= oldValue.datavencimento;
//   datavencimento = datavencimento.trim();
//   datavencimento = datavencimento.split("/");
//   datavencimento = datavencimento[2]+'-'+datavencimento[1]+'-'+datavencimento[0];
//   console.log(datavencimento);
//
//   var empresa= oldValue.empresa;
//   var dataadicionada= oldValue.dataadicionada;
//
//   $.ajax({
//     url: "ControlHost/atualizar_movimentacao.php",
//     data: {
//       id:id,
//       descricao:descricao,
//       tipodocumento:tipodocumento,
//       numerodocumento:numerodocumento,
//       valor:valor,
//       categoria:categoria,
//       datavencimento:datavencimento,
//       empresa:empresa,
//       dataadicionada:dataadicionada
//     },
//     success: function( data ) {
//       if(data=='Sucesso'){
//         Swal.fire(
//           'Adicionado!',
//           'Pode prosseguir!',
//           'success'
//         )
//       }
//       else{
//         Swal.fire(
//           'Algo de errado!',
//           'Você preencheu tudo?!',
//           'error'
//         )
//       }
//
//     }});

  // })

  $("#myForm1").on('submit',function(event){

    event.preventDefault();

    // var tipo_movimentacao = document.getElementById("tipo_movimentacao").value;
    var descricao = document.getElementById("descricao").value;
    // var tipo_documento = document.getElementById("tipo_documento").value;
    // var numero_documento = document.getElementById("numero_documento").value;
    var valor = document.getElementById("valor").value;
    // var categoria = document.getElementById("categoria").value;
    // var data_vencimento = document.getElementById("data_vencimento").value;
    var empresa = document.getElementById("empresa").value;

      $.ajax({
        url: "ControlHost/salvar_evento.php",
        data: {
          descricao:descricao,
          valor:valor,
          empresa:empresa
        },
        success: function( data ) {
          if(data=="Sucesso"){
            $('#myForm1').trigger("reset");
            preencher_select_eventos();
            Swal.fire(
              'Adicionado!',
              'Pode prosseguir!',
              'success'
            )
          }
          else{
            Swal.fire(
              'Algo de errado!',
              'Você preencheu tudo?!',
              'error'
            )
          }
        }
      });
  });


</script>
