<?php
header("Access-Control-Allow-Origin: *");
?>

<!doctype html>
<html class="no-js" lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Sorte Esportiva</title>
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

  <!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '531433351589777');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=531433351589777&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->

</head>

<body >
  <!--[if lt IE 8]>
  <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
  <![endif]-->
  <!-- Start Left menu area -->
  <?php require_once('menu.html'); ?>


  <div class="all-content-wrapper">

  <!-- End Left menu area -->
  <!-- Start Welcome area -->
  <div class="">
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
                <li class="active"><a href="#description">Cadastro Colaborador</a></li>
                <li class=""><a href="#cambistas">Colaboradores</a></li>
                <li class=""><a href="#aniversario_cambistas">Aniversário de Hoje</a></li>
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
                                  <input  required name="categoria" autocomplete="off" id="nome_completo" type="text" class="form-control" placeholder="Nome Completo ">
                                </div>
                                <div class="form-group">
                                  <input  required name="categoria" autocomplete="off" id="telefone" type="text" class="form-control" placeholder="Telefone">
                                </div>
                                <div class="form-group">
                                  <input  required name="categoria" autocomplete="off" id="data_nascimento" type="text" inputmode='numeric' placeholder='Data de Nascimento (01/01/1991)' class="form-control">
                                </div>

                                <div class="form-group">
                                  <input  required name="categoria" autocomplete="off" id="cpf" type="text" inputmode='numeric' placeholder='CPF' class="form-control">
                                </div>

                                <div class="form-group">
                                  <input  required name="categoria" autocomplete="off" id="gerencia" type="text" class="form-control" placeholder="Gerência">
                                </div>

                                <div class="form-group">
                                  <select class='form-control' id='estado'>
                                    <option value=''>Selecione um Estado</option>
                                  </select>
                                </div>
                                <div class="form-group">
                                  <select class='form-control' id='cidades'>
                                    <option value=''>Selecione uma cidade</option>
                                  </select>
                                </div>


                        </div>

</div>
<div class="row">
  <div class="col-lg-12">
    <div class="payment-adress">
      <button type="submit" id='botao_adicionar' class="btn btn-primary waves-effect waves-light">Adicionar</button>
    </div>
  </div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>


<div class="product-tab-list tab-pane fade in" id="cambistas">
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
                          <h1>Tabela de Cambistas</h1>
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
                          <thead>
                            <tr>
                              <th data-field="state" data-checkbox="true"></th>
                              <th data-field="id">ID</th>
                              <th  data-editable="true" data-field="nome">Nome</th>
                              <th  data-editable="true" data-field="telefone">Telefone</th>
                              <th  data-editable="true" data-field="data_nascimento">Data</th>
                              <th  data-editable="true" data-field="cidade">Cidade</th>
                              <th  data-editable="true" data-field="estado">Estado</th>
                              <th  data-editable="true" data-field="gerencia">Gerência</th>
                              <th data-editable="true" data-field="datacadastro">Data Cadastro</th>
                              <th data-field="action"></th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php
                            include('Control/connect.php');
                            $conexao->set_charset("utf8");
                            $query = "select * from cambistas order by id desc";
                            $result= mysqli_query($conexao, $query);
                            if (mysqli_num_rows($result) > 0) {
                              while($row = $result->fetch_array(MYSQLI_ASSOC)){

                                $id= $row['id'];
                                $nome_completo= $row['nome_completo'];
                                $telefone= $row['telefone'];
                                $cidade= $row['cidade'];
                                $estado= $row['estado'];
                                $gerencia= $row['gerencia'];
                                $data_cadastro= $row['data_cadastro'];
                                $data_nascimento= $row['data_nascimento'];

                                ?>
                                <tr>
                                  <td></td>
                                  <td><?php echo $id ?></td>
                                  <td ><?php echo $nome_completo ?></td>
                                  <td ><?php echo $telefone ?></td>
                                  <td ><?php echo $data_nascimento ?></td>
                                  <td ><?php echo $cidade ?></td>
                                  <td><?php echo $estado ?></td>
                                  <td><?php echo $gerencia ?></td>
                                  <td><?php echo $data_cadastro ?></td>
                                  <td><button class='btn btn-primary' onclick='ver_movimentacao("<?php echo $id ?>","<?php echo $id?>")'>Atualizar Dados</button></td>
                                </tr>
                                <?php
                              }
                            }
                            ?>
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

<div class="product-tab-list tab-pane fade in" id="aniversario_cambistas">
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

                          <h1>Tabela de Cambistas</h1>


                      <table id='tabela_aniversario' class='display responsive'>

                      <thead>
                        <tr>
                          <th class='all'>Colaborador</th>
                          <th>Gerência</th>
                          <th>Aniversário</th>
                          <th>Telefone</th>
                          <th>Cidade</th>
                          <th class='all'>Enviar Mensagem</th>
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

			$.getJSON('estados_cidades.json', function (data) {

				var items = [];
				var options = '<option value="">Escolha um estado</option>';

				$.each(data, function (key, val) {
					options += '<option value="' + val.sigla + '">' + val.nome + '</option>';
				});
				$("#estado").html(options);

				$("#estado").change(function () {

					var options_cidades = '';
					var str = "";

					$("#estado option:selected").each(function () {
						str += $(this).text();
					});

					$.each(data, function (key, val) {
						if(val.nome == str) {
							$.each(val.cidades, function (key_city, val_city) {
								options_cidades += '<option value="' + val_city + '">' + val_city + '</option>';
							});
						}
					});

					$("#cidades").html(options_cidades);

				}).change();

			});


$( document ).ready(function() {
  $('#data_nascimento').mask('00/00/0000');
  $('#telefone').mask('(00) 0 0000 0000');
  $('#cpf').mask('000.000.000-00');

  buscar_gerencia();
  buscar_aniversario();

  getLocation();

  $('#gerencia').typeahead({
   source: function(query, result)
   {
    $.ajax({
     url:"ControlHost/typeahead_gerencia.php",
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

  $('#cambista').typeahead({
   source: function(query, result)
   {
     var gerencia = $('#gerencia').val();

    $.ajax({
     url:"ControlHost/typeahead_cambista.php",
     method:"POST",
     data:{query:query,gerencia:gerencia},
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


  $("#myForm1").on('submit',function(event){

    event.preventDefault();

    $('#botao_adicionar').html('Adicionando <span><i class="fa fa-spinner fa-spin fa-3x fa-fw"></i></span>')

    var nome_completo = document.getElementById("nome_completo").value;
    var telefone = document.getElementById("telefone").value;
    var data_nascimento = document.getElementById("data_nascimento").value;
    var gerencia = document.getElementById("gerencia").value;
    var estado = document.getElementById("estado").value;
    var cidades = document.getElementById("cidades").value;
    var cpf = document.getElementById("cpf").value;

    var latitude = sessionStorage.getItem("latitude");
    var longitude = sessionStorage.getItem("longitude");

      $.ajax({
        url: "ControlHost/salvar_Cambista.php",
        data: {
          nome_completo:nome_completo,
          telefone:telefone,
          data_nascimento:data_nascimento,
          cpf:cpf
          ,
          gerencia:gerencia,
          estado:estado,
          latitude:latitude,
          longitude:longitude,
          cidades:cidades
        },
        success: function( data ) {
          if(data=="Sucesso"){
            $('#myForm1').trigger("reset");
              $('#botao_adicionar').html('Adicionar');

            Swal.fire(
              'Adicionado!',
              'Pode prosseguir!',
              'success'
            )

            window.location.href='obrigado2.html';

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

function buscar_aniversario(){

  $.ajax({
   url:"ControlHost/buscar_aniversarios.php",
   method:"POST",
   dataType:"json",
   success:function(data)
   {

     var table = $('#tabela_aniversario').DataTable();
     table.clear().draw();
     table.destroy();
     var t = $('#tabela_aniversario').DataTable({
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
     });


     for(var i=0; i<data.length;i++){

       var nome_completo = data[i].nome_completo;
       var gerencia = data[i].gerencia;
       var telefone = data[i].telefone;
       var data_nascimento = data[i].data_nascimento;
       var cidade = data[i].cidade;
       var estado = data[i].estado;

       dados = JSON.stringify(data[i]);


     t.row.add([
         nome_completo,
         gerencia,
         telefone,
         data_nascimento,
         cidade,
         `<button class='btn btn-success' onclick='enviar_mensagem_whatsapp("`+nome_completo+`", "`+telefone+`")'>Enviar Parabéns</button>`
     ]).draw(false);

   }
   }
  })
}

function enviar_mensagem_whatsapp(nome,telefone){


  telefone = telefone.replaceAll('(','');
  telefone = telefone.replaceAll(')','');
  telefone = telefone.replaceAll(' ','');
  var texto = `Feliz aniversário, `+nome+`!

Tudo de incrível na sua vida e que você consiga muito lucro e benção em sua vida!

Que você ganhe *MUITO DINHEIRO* com a gente ainda, hehe 💚!

Sempre se lembre da *Sorte Esportiva* 🍀 que a gente _sempre se lembrará de você_ `;

  texto = encodeURI(texto);

  var data = "https://wa.me/55"+telefone+"?text="+texto;

  // $.ajax({
  //  url:"ControlHost/enviar_whatsapp.php",
  //  method:"POST",
  //  data:{
  //    telefone:telefone,
  //    nome:nome
  //  },
  //  success:function(data)
  //  {
     window.open(data);
 //   }
 // });
}

function salvar_gerencia(){
  localStorage.setItem('gerencia', $('#gerencia').val());
}

function buscar_gerencia(){
  var gerencia = localStorage.getItem('gerencia');
  if(gerencia){
    // $('#gerencia').val(gerencia);
  }
}

function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else {
    alert("Geolocation is not supported by this browser.");
  }
}

function showPosition(position) {

  sessionStorage.setItem('latitude',position.coords.latitude);
  sessionStorage.setItem('longitude',position.coords.longitude);

}

</script>
