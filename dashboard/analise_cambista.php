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
  <link rel="stylesheet" href="assets/summernote/summernote.css">

  <link rel="stylesheet" href="css/c3/c3.min.css">

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

  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.6/css/responsive.dataTables.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/rowreorder/1.2.7/css/rowReorder.dataTables.min.css">
  <!-- modernizr JS
  ============================================ -->
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
                <li class="active"><a href="#description">Cadastrar</a></li>
                <li><a href="#todos">Todos os Ips</a></li>
                <!-- <li><a href="#information">Relatório Geral</a></li> -->
              </ul>
              <div id="myTabContent" class="tab-content custom-product-edit">
                <div class="product-tab-list tab-pane fade active in" id="description">
                  <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                      <div class="review-content-section">
                        <div id="dropzone1" class="pro-ad">
                          <form class="dropzone dropzone-custom needsclick add-professors" id="analise_ip">
                            <div class="row">
                              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">


                                <div class="form-group">
                                  <span><label>Insira o colaborador e ip</label></span>
                                  <input required name="categoria" autocomplete="off" id="colaborador" type="text"
                                    class="form-control"
                                    placeholder="Ex. COLABORADOR: FELIPEGYN02 - IP: 191.216.222.53">
                                </div>

                              </div>
                            </div>
                            <div class="row">
                              <div class="col-lg-12">
                                <div class="payment-adress">
                                  <button type="submit" id='botao_adicionar'
                                    class="btn btn-primary waves-effect waves-light">Adicionar</button>
                                  <button type="button" id='botao_zerar' style='background-color:red'
                                    class="btn btn-info waves-effect waves-light" onclick='zerar_busca()'>Zerar
                                    Busca</button>
                                </div>
                              </div>
                          </form>

                          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <h2>Lista de Ips Repetidos
                            </h2>
                          </div>
                          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <table id='relatorioAnalises' class='display responsive'
                              style='margin: 0px !important; width: 100%'>
                              <thead>
                                <tr>
                                  <th>IP</th>
                                  <th>Login</th>
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

              <div class="product-tab-list tab-pane fade in" id="todos">
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="review-content-section">
                      <div id="dropzone1" class="pro-ad">


                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                          <h2>Lista de Ips
                          </h2>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                          <table id='relatorioTodosIps' class='display responsive'
                            style='margin: 0px !important; width: 100%'>
                            <thead>
                              <tr>
                                <th></th>
                                <th>Login</th>
                                <th>IP</th>
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


              <div class="product-tab-list tab-pane fade in" id="information">
                <div class="container-fluid">

                  <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                      <table id='relatorioAnalises' class='display responsive'
                        style='margin: 0px !important; width: 100%'>
                        <thead>
                          <tr>
                            <th></th>
                            <th>Gerência</th>
                            <th>Cambista</th>
                            <th>Observação</th>
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

              <div class="product-tab-list tab-pane fade in" id="bancos">
                <div class="container-fluid">

                  <div id="toolbar">
                    <div class="form-group">
                      <label>Data Inicial</label>
                      <input required name="data" onchange="buscar_bancos()" id="pesquisa_data_inicial" type="date"
                        class="form-control">
                    </div>
                    <div class="form-group">
                      <label>Data Final</label>
                      <input required name="data" onchange="buscar_bancos()" id="pesquisa_data_final" type="date"
                        class="form-control">
                    </div>
                  </div>

                  <div class="row" id='colunas_bancos'>


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


  <?php require('modal_analise.php') ?>

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
  <script src="js/c3-charts/d3.min.js"></script>
  <script src="js/c3-charts/c3.min.js"></script>
  <script src="js/c3-charts/c3-active.js"></script>

  <script src="js/tab.js"></script>
  <!-- plugins JS
============================================ -->
  <script src="js/plugins.js"></script>
  <!-- main JS
============================================ -->
  <script src="js/main.js"></script>
  <script src="js_nova/analises.js"></script>
  <script src="assets/summernote/summernote.js"></script>
  <!-- tawk chat JS
============================================ -->
  <!-- <script src="js/tawk-chat.js"></script> -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"
    integrity="sha256-Kg2zTcFO9LXOc7IwcBx1YeUBJmekycsnTsq2RuFHSZU=" crossorigin="anonymous"></script>
</body>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.3.2/chart.min.js"
  integrity="sha512-VCHVc5miKoln972iJPvkQrUYYq7XpxXzvqNfiul1H4aZDwGBGC0lq373KNleaB2LpnC2a/iNfE5zoRYmB4TRDQ=="
  crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!--
<link href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css" rel="stylesheet">
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/plug-ins/1.10.20/i18n/Portuguese-Brasil.json"></script> -->
<!-- <link rel="stylesheet" href="css/data-table/bootstrap-table.css"> -->
<!-- <link rel="stylesheet" href="css/data-table/bootstrap-editable.css"> -->

</html>

<script>
$(document).ready(function() {
  $('#valor').mask('#.##0,00', {
    reverse: true
  });
  $('.produto_em_reais').mask('#.##0,00', {
    reverse: true
  });

  $('#summernote').summernote({
    height: 300, // set editor height
    minHeight: null, // set minimum height of editor
    maxHeight: null, // set maximum height of editor
  });

  //todos_ips();
  // mostrar_lista_analises();
  // today = yyyy + '-' + mm + '-' + dd;
});


$("#analise_ip").on('submit', function(event) {
  event.preventDefault();

  var colaborador = $('#colaborador').val();

  var split = colaborador.split('COLABORADOR: ');
  var nova = split[1];
  nova = nova.split(' - ');
  var colaborador = nova[0];
  var ip = nova[1];
  ip = ip.split('IP: ');
  ip = ip[1];
  var analises = sessionStorage.getItem('analises');
  if (analises) {
    analises = JSON.parse(analises);
  } else {
    analises = [];
  }

  analises.push({
    colaborador: colaborador,
    ip: ip
  });

  $.ajax({
    url: 'ControlHost/salvarIP.php',
    destroy: true,
    data: {
      colaborador: colaborador,
      ip: ip
    },
    success: function(data) {
      if (data == 'Sucesso') {

        const Toast = Swal.mixin({
          toast: true,
          position: 'top-end',
          showConfirmButton: false,
          timer: 3000,
          timerProgressBar: true,
          didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
          }
        })

        Toast.fire({
          icon: 'success',
          title: 'Cadastrado com sucesso'
        })
        //mostrar_lista_analises();
      }
    }
  });

  sessionStorage.setItem('analises', JSON.stringify(analises));
  // mostrar_lista_analises();

  $('#colaborador').val('');
  $('#colaborador').focus();
  // $('#valor_movimentado').val('');
  // $('#observacoes').val('');
});

function mostrar_lista_analises() {

  var table = $('#relatorioAnalises').DataTable();
  table.clear().draw();
  table.destroy();
  var t = $('#relatorioAnalises').DataTable({
    'paging': false,
    'info': false,
    "order": [
      [0, "desc"]
    ],
    'responsive': 'true',
    "language": {
      "url": "https://cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Portuguese-Brasil.json"
    }
  });

  $.ajax({
    url: 'ControlHost/buscar_todos_ips.php',
    dataType: 'json',
    destroy: true,
    data: {},
    success: function(data) {
      if (data) {

        data = groupBy(data, 'ip');
        data = Object.entries(data);

        for (var j = 0; j < data.length; j++) {

          var auxiliar = data[j];
          var ip = auxiliar[0];
          var vetor = auxiliar[1];
          var texto_login = '';

          for (var k = 0; k < vetor.length; k++) {
            var login = vetor[k].login;
            texto_login += `${login} - ${vetor[k].createdAt} <br/>`;
            //VERIFICAR LOGINS REPETIDOS                    
          }

          t.row.add([
            ip,
            texto_login,
          ]).draw(false);

        }


        // for (var i = 0; i < data.length; i++) {

        //   var ip_aux = data[i].ip;
        //   var colaborador_comparado = data[i].login;
        //   var data_cadastro = data[i].createdAt;
        //   data_cadastro = data_cadastro.split(' ');
        //   data_cadastro = data_cadastro[0];
        //   data_cadastro = data_cadastro.split('-');
        //   data_cadastro = data_cadastro[2] + '/' + data_cadastro[1] + '/' + data_cadastro[0];
        //   console.log('2-' + cob);
        //   if (cob != colaborador_comparado) {
        //     console.log(cob);
        //     t.row.add([
        //       data[i].id,
        //       cob,
        //       colaborador_comparado,
        //       ip_aux,
        //       data_cadastro,
        //       ''
        //     ]).draw(false);
        //   }
        // }
      }

    }
  });

}

function todos_ips() {

  var table = $('#relatorioTodosIps').DataTable();
  table.clear().draw();
  table.destroy();
  var t = $('#relatorioTodosIps').DataTable({
    'paging': false,
    'info': false,
    "order": [
      [0, "desc"]
    ],
    'responsive': 'true',
    "language": {
      "url": "https://cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Portuguese-Brasil.json"
    }
  });

  $.ajax({
    url: 'ControlHost/buscar_todos_ips.php',
    dataType: 'json',
    destroy: true,
    // async: false,
    data: {},
    success: function(data) {
      console.log(data);
      if (data) {
        for (var i = 0; i < data.length; i++) {

          var ip_aux = data[i].ip;
          var colaborador_comparado = data[i].login;
          var data_cadastro = data[i].createdAt;
          data_cadastro = data_cadastro.split(' ');
          data_cadastro = data_cadastro[0];
          data_cadastro = data_cadastro.split('-');
          data_cadastro = data_cadastro[2] + '/' + data_cadastro[1] + '/' + data_cadastro[0];
          t.row.add([
            data[i].id,
            // cob,
            colaborador_comparado,
            ip_aux,
            data_cadastro,
            ''
          ]).draw(false);
        }
      }

    }
  });
}

function zerar_busca() {
  sessionStorage.removeItem('analises');
  const Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000,
    timerProgressBar: true,
    didOpen: (toast) => {
      toast.addEventListener('mouseenter', Swal.stopTimer)
      toast.addEventListener('mouseleave', Swal.resumeTimer)
    }
  })

  Toast.fire({
    icon: 'info',
    title: 'Busca Zerada'
  })
}

function groupByColaborador(objectArray, property) {
  return objectArray.reduce(function(acc, obj) {
    var key = obj[property];
    if (!acc[key]) {
      acc[key] = [];
    }
    acc[key].push(obj);
    return acc;
  }, {});
}
</script>