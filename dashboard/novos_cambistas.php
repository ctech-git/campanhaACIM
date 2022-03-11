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
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">

  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.6/css/responsive.dataTables.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/rowreorder/1.2.7/css/rowReorder.dataTables.min.css">

  <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
  <!--[if lt IE 8]>
  <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
  <![endif]-->
  <!-- Start Left menu area -->
  <?php require_once('menu.html'); ?>
  <!-- End Left menu area -->
  <!-- Start Welcome area -->
  <div class="all-content-wrapper">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="logo-pro">
            <a href="index.html"><img class="main-logo" src="img/logo/logo.png" alt="" /></a>
          </div>
        </div>
      </div>
    </div>
    <!-- </div> -->
    <!-- Single pro tab review Start-->
    <div class="single-pro-review-area mt-t-30 mg-b-15">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="product-payment-inner-st">
              <ul id="myTabedu1" class="tab-review-design">
                <li class="active"><a href="#information">Relatórios</a></li>
                <!-- <li><a href="#supervisor">Supervisor</a></li>
                <li><a href="#despesa_supervisor">Despesa Gerente</a></li> -->
              </ul>
              <div id="myTabContent" class="tab-content custom-product-edit">

                <div class="product-tab-list tab-pane fade active in" id="information">
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
                                          <h1>Tabela de novos Cambistas</h1>
                                        </div>
                                      </div>

                                      <div class="sparkline13-graph">
                                        <div class="datatable-dashv1-list custom-datatable-overright">
                                          <div id="toolbar">
                                            <div class="form-group">
                                              <label>Data Inicial</label>
                                              <input required name="data" onchange="pesquisar_tabela_novos_cambistas()"
                                                id="pesquisa_data_inicial" type="date" class="form-control"
                                                placeholder="Nome da Gerência">
                                            </div>
                                            <div class="form-group">
                                              <label>Data Final</label>
                                              <input required name="data" onchange="pesquisar_tabela_novos_cambistas()"
                                                id="pesquisa_data_final" type="date" class="form-control"
                                                placeholder="Nome da Gerência">
                                            </div>
                                          </div>

                                          <table id='tabela_novos_cambistas' class='display'>
                                            <thead>
                                              <tr>
                                                <th>ID</th>
                                                <th>Nome completo</th>
                                                <th>Telefone</th>
                                                <th>CPF</th>
                                                <th>Estado</th>
                                                <th>Cidade</th>
                                                <th>Já foi cambista?</th>
                                                <th>Observações</th>
                                                <th>Status</th>
                                                <th>Data</th>
                                                <th></th>
                                              </tr>
                                            </thead>
                                            <tbody>
                                            </tbody>
                                          </table>

                                          <h2 style='margin-top:100px'>Já analisados</h2>
                                          <table id='tabela_novos_cambistas_analisados' class='display'>
                                            <thead>
                                              <tr>
                                                <th>ID</th>
                                                <th>Nome completo</th>
                                                <th>Telefone</th>
                                                <th>CPF</th>
                                                <th>Estado</th>
                                                <th>Cidade</th>
                                                <th>Já foi cambista?</th>
                                                <th>Observações</th>
                                                <th>Status</th>
                                                <th>Data</th>
                                                <th></th>
                                              </tr>
                                            </thead>
                                            <tbody>
                                            </tbody>
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

  </div>

  <?php require_once('modal_analise_cambista.php') ?>

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
  <script src="js/produtos.js"></script>
  <!-- tawk chat JS
============================================ -->
  <!-- <script src="js/tawk-chat.js"></script> -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"
    integrity="sha256-Kg2zTcFO9LXOc7IwcBx1YeUBJmekycsnTsq2RuFHSZU=" crossorigin="anonymous"></script>
</body>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script src="js/summernote.js"></script>

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

<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.flash.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.6/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/rowreorder/1.2.7/js/dataTables.rowReorder.min.js"></script>


<script src="js_nova/tabelas.js"></script>

</html>

<script>
$(document).ready(function() {



  var today = new Date();
  var dd = today.getDate();
  var mm = today.getMonth() + 1; //January is 0!
  var yyyy = today.getFullYear();
  if (dd < 10) {
    dd = '0' + dd
  }
  if (mm < 10) {
    mm = '0' + mm
  }
  // today = yyyy + '-' + mm + '-' + dd;
  today = yyyy + '-' + mm + '-' + '01';
  document.getElementById("pesquisa_data_inicial").value = today;
  today = yyyy + '-' + mm + '-' + dd;
  document.getElementById("pesquisa_data_final").value = today;

  pesquisar_tabela_novos_cambistas();



  var timestamp = new Date().getTime();
  $('#token_time').val(timestamp)

  $('#valor').mask('#.##0,00', {
    reverse: true
  });
  // preencher_tabela_movimentacao();
  $('#summernote').summernote({
    height: 300,
    tabsize: 2,
    minHeight: 200,
    maxHeight: null,
  });

  $('#summernote').summernote('codeview.toggle');

});
</script>