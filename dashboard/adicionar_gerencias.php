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

  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.6/css/responsive.dataTables.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/rowreorder/1.2.7/css/rowReorder.dataTables.min.css">


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
                <li class="active"><a href="#description">Adicionar Gerentes</a></li>
                <li><a href="#information">Consultar</a></li>
              </ul>
              <div id="myTabContent" class="tab-content custom-product-edit">

                <div class="product-tab-list tab-pane fade active in" id="description">
                  <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                      <div class="review-content-section">
                        <div id="dropzone1" class="pro-ad">
                          <form class="dropzone dropzone-custom needsclick add-professors" id="myForm1">
                            <div class="row">
                              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

                                <div class="form-group">
                                  <select required name="tipo_movimentacao" id="id_supervisor" class="form-control">
                                    <option value="">Selecione o Supervisor</option>
                                    <option value="1">Wandson</option>
                                  </select>
                                </div>

                                <div class="form-group">
                                  <input oninput="this.value = this.value.toUpperCase()" required name="descricao" autocomplete="off" id="nome_gerencia" type="text" class="form-control" placeholder="Nome do Gerente">
                                </div>

                                <div class="form-group">
                                  <input  required name="descricao" autocomplete="off" id="telefone" type="text" class="form-control" placeholder="Telefone">
                                </div>

                                <div class="form-group">
                                  <input oninput="this.value = this.value.toUpperCase()" required name="descricao" autocomplete="off" id="cidade" type="text" class="form-control" placeholder="Cidade">
                                </div>

                                <div class="form-group">
                                  <input  required name="descricao" autocomplete="off" id="comissao" type="text" class="form-control" placeholder="Comissão">
                                </div>

                        </div>

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

<div class="product-tab-list tab-pane fade in" id="information">
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <div class="review-content-section">
        <div class="row">
          <div class="col-lg-12">
            <div class="data-table-area mg-b-15">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h1>Tabela de produtos</h1>


                          <table id='tabela_gerentes' style='width:100%' class='display responsive'>

                          <thead>
                            <tr>
                              <th>ID</th>
                              <th>Colaborador</th>
                              <th>Gerência</th>
                              <th>Cidade</th>
                              <th>Comissão</th>
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


<!--
<link href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css" rel="stylesheet">
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/plug-ins/1.10.20/i18n/Portuguese-Brasil.json"></script> -->
<!-- <link rel="stylesheet" href="css/data-table/bootstrap-table.css"> -->
<!-- <link rel="stylesheet" href="css/data-table/bootstrap-editable.css"> -->

</html>

<script>

$( document ).ready(function() {
  $('#valor').mask('#.##0,00', {reverse: true});
  buscar_gerentes();

  $('#descricao').typeahead({
   source: function(query, result)
   {
    $.ajax({
     url:"ControlHost/fornecedores.php",
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

  // $('#categoria').typeahead({
  //  source: function(query, result)
  //  {
  //   $.ajax({
  //    url:"ControlHost/categorias.php",
  //    method:"POST",
  //    data:{query:query},
  //    dataType:"json",
  //    success:function(data)
  //    {
  //     result($.map(data, function(item){
  //      return item;
  //     }));
  //    }
  //   })
  //  }
  // });
});

  $("#myForm1").on('submit',function(event){

    event.preventDefault();

    var id_supervisor = document.getElementById("id_supervisor").value;
    var nome_gerencia = document.getElementById("nome_gerencia").value;
    var telefone = document.getElementById("telefone").value;
    var cidade = document.getElementById("cidade").value;
    var comissao = document.getElementById("comissao").value;

      $.ajax({
        url: "ControlHost/salvar_gerencia.php",
        data: {
          id_supervisor:id_supervisor,
          nome_gerencia:nome_gerencia,
          telefone:telefone,
          comissao:comissao,
          cidade:cidade
        },
        success: function( data ) {
          if(data=="Sucesso"){
            $('#myForm1').trigger("reset");
            Swal.fire(
              'Adicionado!',
              'Pode prosseguir!',
              'success'
            )
            buscar_gerentes();
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


function buscar_gerentes(){

  $.ajax({
      url: "ControlHost/buscar_gerentes.php",
      dataType: 'json',
      method: 'GET',
      success: function (data) {

        var table = $('#tabela_gerentes').DataTable();
        table.clear().draw();
        table.destroy();
        var t = $('#tabela_gerentes').DataTable({
            'paging': false,
            'info': false,
            'dom': 'Bfrtip',
            'buttons': [
              'copy', 'csv', 'excel', 'pdf', 'print'
            ],
            'responsive': 'true',
            "language": {
                "url": "https://cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Portuguese-Brasil.json"
            }
              // ,initComplete: function () {
              //   this.api().columns([4,5]).every( function () {
              //     var column = this;
              //     var select = $('<select><option value=""></option></select>')
              //     .appendTo( $(column.header()).empty() )
              //     .on( 'change', function () {
              //       var val = $.fn.dataTable.util.escapeRegex(
              //         $(this).val()
              //       );
              //
              //       column
              //       .search( val ? '^'+val+'$' : '', true, false )
              //       .draw();
              //     } );
              //
              //     column.data().unique().sort().each( function ( d, j ) {
              //       select.append( '<option value="'+d+'">'+d+'</option>' )
              //     } );
              //   } );
              // }
        });

        for (var i = 0; i < data.length; i++) {

          var id = data[i].id;
          var nome_gerencia = data[i].nome_gerencia;
          var cidade = data[i].cidade;
          var id_supervisor = data[i].id_supervisor;
          var comissao = data[i].comissao;

            t.row.add([
                id,
                nome_gerencia,
                id_supervisor,
                cidade,
                comissao+"%",
                "<button class='btn btn-primary' onclick='buscar_perfil_gerente(" + data[i].id + ")'>Ver perfil</button>"
            ]).draw(false);
        }
      }
  });
}

function buscar_perfil_gerente(id){
      url = 'perfil_gerente.php?id='+id;
      window.open(url)
}
</script>
