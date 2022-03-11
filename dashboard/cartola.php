<!doctype html>
<html class="no-js" lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Cartola</title>
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
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.6/css/responsive.dataTables.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/rowreorder/1.2.7/css/rowReorder.dataTables.min.css">
  <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">

  <!-- modernizr JS
  ============================================ -->
  <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body >
  <!--[if lt IE 8]>
  <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
  <![endif]-->
  <!-- Start Left menu area -->
  <!-- End Left menu area -->
  <!-- Start Welcome area -->
  <div class="">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="logo-pro">
            <a href="index.html"><img class="main-logo" src="img/logo/logo_cartola.png" alt="" /></a>
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
                <li class="active"><a href="#description">Adicionar Agenda</a></li>
                <li class=""><a onclick='carregar_tabela_cartola()' href="#information">Horários</a></li>
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
                                  <input  required name="categoria" autocomplete="off" id="nome_completo" onblur='completar_dados()' type="text" class="form-control" placeholder="Nome Completo ">
                                </div>
                                <div class="form-group">
                                  <input  required name="categoria" autocomplete="off" id="telefone" type="text"  class="form-control" inputmode='numeric' placeholder="Telefone ">
                                </div>
                                <div class="form-group">
                                  Data de Nascimento<input  required name="categoria" autocomplete="off" id="data_nascimento" type="text" inputmode='numeric' placeholder="01/01/2000" class="form-control">
                                </div>

                                <div id="div_servicos">

                                <div class="form-group">
                                  <select class="form-control" name='servico' style='display:inline-block' onchange='atualizar_valor()' id='servicos'></select>
                                </div>

                                </div>
                                <a onclick='adicionar_servico()' class='btn btn-success'>Adicionar outro serviço</a>

                                <div class="form-group">
                                  <select class="form-control" style='display:inline-block' onchange='calcular_desconto_funcionario()' id='funcionario'>
                                  <option value=''>É funcionário?</option>
                                  <option value='nao'>Não</option>
                                  <option value='sim'>Sim</option>
                                  </select>
                                </div>

                                <div class="form-group">
                                  <input name="categoria" inputmode='numeric' autocomplete="off" id="valor" type="text"  class="form-control" placeholder="Valor (exemplo: R$ 45,00)">
                                </div>



                                <div class="form-group">
                                  <select class="form-control" required style='display:inline-block' onchange='atualizar_valor()' id='horario'>
                                  <option>09:00</option>
                                  <option>09:30</option>
                                  <option>10:00</option>
                                  <option>10:30</option>
                                  <option>11:00</option>
                                  <option>11:30</option>
                                  <option>12:00</option>
                                  <option>12:30</option>
                                  <option>13:00</option>
                                  <option>13:30</option>
                                  <option>14:00</option>
                                  <option>14:30</option>
                                  <option>15:00</option>
                                  <option>15:30</option>
                                  <option>16:00</option>
                                  <option>16:30</option>
                                  <option>17:00</option>
                                  <option>17:30</option>
                                  <option>18:00</option>
                                  <option>18:30</option>
                                  <option>19:00</option>
                                  <option>19:30</option>
                                  <option>20:00</option>
                                  </select>
                                </div>

                                <div class="form-group">
                                  <select class="form-control" style='display:inline-block' id='profissional'>
                                  <option value='Helio'>Hélio</option>
                                  <option value='Rogério'>Rogério</option>
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
                    <div class="sparkline13-list">
                      <div class="sparkline13-hd">
                        <div class="main-sparkline13-hd">
                          <h1>Tabela de agendamentos</h1>
                        </div>
                      </div>
                      <div class="sparkline13-graph">
                        <div class="datatable-dashv1-list custom-datatable-overright">

<!--
                          <table id="table" data-toggle="table" data-pagination="true" data-search="true"
                          data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true"
                          data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                          data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true"
                          data-toolbar="#toolbar"> -->
                          <table id='table' class='display responsive'>

                          <thead>
                            <tr>
                              <th>ID</th>
                              <th>Nome Completo</th>
                              <th>Horário</th>
                              <th>Profissional</th>
                              <th>Data Cadastrado</th>
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"></script>
</html>

<script>


var servicos =
[
{'servico':'Barba', 'valor':'30.00'},
{'servico':'Barba na toalha quente', 'valor':'70.00'},
{'servico':'Barba por fazer', 'valor':'30.00'},
{'servico':'Barboterapia', 'valor':'40.00'},
{'servico':'Cabelo', 'valor':'40.00'},
{'servico':'Cabelo e barba', 'valor':'70.00'},
{'servico':'Coloração capilar', 'valor':'40.00'},
{'servico':'Coloração de barba', 'valor':'30.00'},
{'servico':'Hidratação Capilar', 'valor':'30.00'},
{'servico':'Hidratação de barba', 'valor':'30.00'},
{'servico':'Higienização facial', 'valor':'10.00'},
{'servico':'Luzes', 'valor':'80.00'},
{'servico':'Pezinho de cabelo', 'valor':'15.00'},
{'servico':'Pigmentação de barba', 'valor':'30.00'},
{'servico':'Realinhamento Capilar', 'valor':'40.00'},
{'servico':'Realinhamento de barba', 'valor':'30.00'},
{'servico':'Selagem', 'valor':'80.00'},
{'servico':'Sobrancelhas', 'valor':'10.00'},
{'servico':'Tratamento para caspa', 'valor':'40.00'},
{'servico':'Tratamento para caspa', 'valor':'40.00'}
];

$('#nome_completo').typeahead({
  source: function(query, result)
  {
    $.ajax({
      url:"ControlHost/buscar_nome_cliente.php",
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


$( document ).ready(function() {
  $('#valor').mask('#.##0,00', {reverse: true});
  $('#data_nascimento').mask('00/00/0000');
  $('#telefone').mask('(00) 0 0000-0000');

  carregar_tabela_cartola();


  for(var a=0; a<servicos.length;a++){
    $('#servicos').append(`<option value='`+a+`'> `+servicos[a].servico+`  </option>`)
  }

});

function adicionar_servico(){

  var select = `<select class="form-control" name='servico' style='display:inline-block' onchange='atualizar_valor()'>`;


    for(var a=0; a<servicos.length;a++){
      select += `<option value='`+a+`'> `+servicos[a].servico+`  </option>`
    }

    select += '</select>';

  $('#div_servicos').append(select);
}

  $("#myForm1").on('submit',function(event){

    event.preventDefault();

    $('#botao_adicionar').html('Adicionando <span><i class="fa fa-spinner fa-spin fa-3x fa-fw"></i></span>')

    var nome_completo = document.getElementById("nome_completo").value;
    var telefone = document.getElementById("telefone").value;
    var data_nascimento = document.getElementById("data_nascimento").value;
    var servicos = document.getElementById("servicos").value;
    var valor = document.getElementById("valor").value;
    var horario = document.getElementById("horario").value;
    var funcionario = document.getElementById("funcionario").value;
    var servicos = document.getElementsByName("servico");

    var array_servicos = [];

    for(var i=0; i<servicos.length;i++){
        array_servicos.push(servicos[i].value);
    }

    array_servicos = JSON.stringify(array_servicos);

    var funcionario = document.getElementById("funcionario").value;

      $.ajax({
        url: "ControlHost/salvar_venda_cartola.php",
        type:'GET',
        data: {
          nome_completo:nome_completo,
          telefone:telefone,
          data_nascimento:data_nascimento,
          servicos:array_servicos,
          funcionario:funcionario,
          valor:valor,
          horario:horario,
          profissional:profissional
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


function carregar_tabela_cartola(){
  $.ajax({
      url: "ControlHost/buscar_cartolas.php",
      dataType: 'json',
      success: function (data) {

        var table = $('#table').DataTable();
        table.clear().draw();
        table.destroy();
        var t = $('#table').DataTable({
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

        for (var i = 0; i < data.length; i++) {

            t.row.add([
                data[i].id,
                data[i].nome_completo,
                data[i].horario,
                data[i].profissional,
                data[i].data_adicionado,
                "<button class='btn btn-danger' onclick='excluir_cartola(" + data[i].id + ")'>Excluir</button>"
            ]).draw(false);

        }


      }
  });
}

function atualizar_valor(){
  var index = $('#servicos').val();
  var select_servicos = document.getElementsByName('servico');

  var soma = 0;

  for(var i=0;i<select_servicos.length;i++){
    var select = select_servicos[i];
    var selecionado = select.value;
    soma= Number(soma) + Number(servicos[selecionado].valor);
  }

  soma = parseFloat(soma).toLocaleString('pt-BR', { minimumFractionDigits: 2, style: 'currency', currency: 'BRL' }),
  $('#valor').val(soma);

  calcular_desconto_funcionario();
}

function excluir_cartola(id){
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
        url: "ControlHost/excluir_cartola.php",
        async:false,
        data:{
          id:id
        },
        success: function( data ) {
          console.log(data);
          if(data=='Sucesso'){
            Swal.fire(
              'Deletado!',
              'Seu arquivo foi deletado.',
              'success'
            )
          carregar_tabela_cartola();
        }

        }
      });

    }
  })
}

function calcular_desconto_funcionario(){
  var funcionario = $('#funcionario').val();
  var valor = $('#valor').val();

  if(funcionario=='sim'){
    valor = valor.replaceAll('R$','');
    console.log(valor);
    valor = valor.replaceAll('.','');
    console.log(valor);
    valor = valor.replaceAll(',','.');
    console.log(valor);
    valor = Number(valor)/2;
    console.log(valor);
    valor = parseFloat(valor).toLocaleString('pt-BR', { minimumFractionDigits: 2, style: 'currency', currency: 'BRL' }),
    $('#valor').val(valor);
  }
}

function completar_dados(){
  var nome_completo = $('#nome_completo').val();

  $.ajax({
    url: "ControlHost/buscar_dados_nome.php",
    dataType:'json',
    data: {
      nome_completo:nome_completo,
    },
    success: function( data ) {
      $('#telefone').val(data[0].telefone);
      $('#data_nascimento').val(data[0].data_nascimento);
    }
  });

}

</script>
