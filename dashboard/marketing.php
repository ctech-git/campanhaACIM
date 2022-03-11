<!doctype html>
<html class="no-js" lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Marketing</title>
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
  <link rel="stylesheet" href="css/cadastrar-propriedade.css" type="text/css">
  <link rel="stylesheet" href="css/cropper.css">

  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.6/css/responsive.dataTables.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/rowreorder/1.2.7/css/rowReorder.dataTables.min.css">
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
                <li class="active"><a href="#description">Adicionar Mídia</a></li>
                <li ><a href="#information">Relatórios</a></li>
              </ul>
              <div id="myTabContent" class="tab-content custom-product-edit">

                <div class="product-tab-list tab-pane fade active in" id="description">
                  <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                      <div class="review-content-section">
                        <div id="dropzone1" class="pro-ad">
                          <form enctype="multipart/form-data" action="ControlHost/upload.php" method="post"  class="dropzone dropzone-custom needsclick add-professors" id="">
                            <div class="row">
                              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">


                                <div class="form-group">
                                  <span><label>Categoria</label></span>
                                  <input  required name="categoria" autocomplete="off" id="categoria" type="text" class="form-control" placeholder="Categoria">
                                </div>

                                  <div class="box__input">
                                    <input class="box__file" type="file" name="files[]" id="file" data-multiple-caption="{count} files selected" multiple />
                                    
                                  </div>

                            </div>
                          </div>
                          <div class="row">
                            <div class="col-lg-12">
                              <div class="payment-adress">
                                <button type='submit' id='botao_adicionar' class="btn btn-primary waves-effect waves-light">Adicionar</button>
                              </div>
                            </div>
                          </div>
                        </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>


                <div class="product-tab-list tab-pane fade " id="information">
                  <div class="container-fluid">
                    <div class="row">
                      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <table id='relatorioGerencial' class='display responsive' style='margin: 0px !important; width: 100%'>
                          <thead>
                            <tr>
                              <th>Supervisor</th>
                              <th>Gerência</th>
                              <th>Caixa</th>
                              <th>Comissão</th>
                              <th>Despesas</th>
                              <th>Ajuda de Custo</th>
                              <th>Status</th>
                              <th></th>
                            </tr>
                          </thead>
                          <tbody>
                          </tbody>
                        </table>
                      </div>
<!--
                    <div class="col-6 col-sm-6 col-md-6" style=''>
                      <canvas style='width:100%' id="grafico_caixas"></canvas>
                    </div>
                    <div class="col-6 col-sm-6 col-md-6" style=''>
                      <canvas  style='width:100%' id="grafico_despesas"></canvas>
                    </div> -->

                    <div class="pie-bar-line-area" style='margin-top:80px !important'>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="sparkline9-list responsive-mg-b-30">
                                        <div class="sparkline9-hd">
                                            <div class="main-sparkline9-hd">
                                                <h1>Relatório de caixas</h1>
                                            </div>
                                        </div>
                                        <div class="sparkline9-graph">
                                            <canvas id="grafico_caixas"></canvas>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="sparkline10-list">
                                        <div class="sparkline10-hd">
                                            <div class="main-sparkline10-hd">
                                                <h1>Relatório de despesas</h1>
                                            </div>
                                        </div>
                                        <div class="sparkline10-graph">
                                            <canvas id="grafico_despesas"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                  </div>
                  </div>
                </div>
                            <!-- </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div> -->

</div>
</div>
</div>
</div>
</div>
</div>

</div>


<div class="modal fade" id="modal_editar_relatorio" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editar_descricao"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

            <input type='hidden' id='id_relatorio'/>

            <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <span><label>Supervisor</label></span>
              <input  required name="categoria" autocomplete="off" id="editar_supervisor" type="text" class="form-control" placeholder="Supervisor ">
            </div>
            <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <span><label>Gerência</label></span>
              <input  required name="categoria" autocomplete="off" id="editar_gerencia" type="text"  class="form-control" placeholder="Gerência">
            </div>

            <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <span><label>Valor Caixa</label></span>
              <input name="categoria"  autocomplete="off" id="editar_caixa" type="text"  class="form-control produto_em_reais" placeholder="Caixa">
            </div>

            <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12" style='padding:0 !important'>
              <span><label>Comissão (%)</label></span>
              <input name="categoria"  autocomplete="off" onblur='calcular_comissao()' id="editar_comissao" type="text"  class="form-control" placeholder="Comissão (%)">
            </div>
            <div class="form-group  col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <span><label>Valor da comissão</label></span>
              <input name="categoria" disabled  autocomplete="off" id="editar_text_valor_comissao" type="text"  class="form-control produto_em_reais" placeholder="Valor da Comissão">
            </div>
            <!-- <div class="form-group">
            <span><label>Despesas</label></span>
            <input name="categoria"  autocomplete="off" id="despesas" type="text"  class="form-control produto_em_reais" placeholder="Despesas">
          </div> -->
          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12" style='margin-bottom:60px !important'>
            <span><label>Ajuda de custo</label></span>
            <input name="categoria"  autocomplete="off" id="editar_ajuda_custo" type="text"  class="form-control produto_em_reais" placeholder="Ajuda de custo">
          </div>

        <form class="" action="#"  id="editar_form_outras_entradas">
          <div id='editar_outras_entradas' >
            <div class='row' >
              <div class="col-6 col-sm-6 col-md-6">
                <label for="estimativa_espera" class="" style='color: #000'><strong>Outras Despesas</strong></label>
                <select style='font-size:12px' name='id_outras_entradas' class="form-control texto_itens_carrinho" id="editar_id_outras_entradas">
                  <option value=''>Selecione alguma opção</option>
                  <option value='1'>INTERNET</option>
                  <option value='2'>EQUIPAMENTOS</option>
                  <option value='3'>VIAGENS</option>
                  <option value='4'>MARKETING/PROPAGANDA</option>
                  <option value='5'>ALUGUEL</option>
                  <option value='6'>TRANSPORTE/COMBUSTÍVEL</option>
                  <option value='7'>OUTRAS</option>
                </select>
              </div>

              <div style='' id='editar_div_valor_desconto' class=" col-6 col-sm-6 col-md-6">
                <label for="nome_produto" class="texto_itens_carrinho">Valor Movimentado</label>
                <input name="valor_movimentado" required autocomplete='off' id="editar_valor_movimentado" type="text"  inputmode='numeric' class="form-control produto_em_reais">
              </div>
            </div>

            <div class='row' style='margin-bottom:30px; padding:0px'>
              <div class="col-12 col-sm-12 col-md-12" style='padding:0px'>
                <label for="exampleText" class="col-sm-12 texto_itens_carrinho"><b>Observações</b></label>
                <div class="col-sm-12">
                  <input name="observacoes" id="editar_observacoes" placeholder="" type="text" class="form-control texto_itens_carrinho"></div>
                </div>
              </div>
              <div class='row' style='float:right; padding:0px'>
                <button  type='submit'  style=''  class="mt-1 btn btn-success float-right">Adicionar Outra Despesa <i class="fa fa-plus" aria-hidden="true"></i></button>
              </div>
              <div class='row' style='margin-top:30px !important; padding:0px'>
                <div class="col-12 col-sm-12 col-md-12" style='margin-top:40px;padding:0px'>
                  <label for="exampleText" class="col-sm-12 texto_itens_carrinho"><b>Lista de Entradas</b></label>
                  <div class="col-sm-12">
                    <ul id='editar_lista_entradas'>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="button" onclick='atualizar_relatorio()' class="btn btn-primary">Atualizar</button>
      </div>
    </div>
  </div>
</div>

<div class="overlay-property">
    <div class="overlay-property__inner">
        <div class="overlay-property__content"><span class="spinner"></span><span class="texto-loading"></span></div>
    </div>
</div>
<!-- HTML de loading FIM-->
<!-- MODAL DE ACIDIONAR IMAGEM DA PROPRIEDADE -->
<div class="modal fade" id="modalAdicionaImagem" data-keyboard="false" data-backdrop="static" tabindex="-1"
    role="dialog" aria-labelledby="modalAdicionaImagem" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-body">

            <label class="labelTitulo">Ajuste a imagem</label>
            <input type="hidden" name="imagemAtualAdiciona" id="imagemAtualAdiciona">
            <div class="divImagemCropped">
            <img id="novaImagem" src="">
            </div>
            <div class="divBotaoModalCropp">
            <button  onclick="cancelaCrop()" class="btn btn-danger">Cancelar</button>
            <button onclick="finalizaCropImagem()" class="btn btn-primary">Pronto</button>
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
<script src="js/produtos.js"></script>
<script src="js_nova/relatorio_gerencial.js"></script>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.3.2/chart.min.js" integrity="sha512-VCHVc5miKoln972iJPvkQrUYYq7XpxXzvqNfiul1H4aZDwGBGC0lq373KNleaB2LpnC2a/iNfE5zoRYmB4TRDQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!--
<link href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css" rel="stylesheet">
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/plug-ins/1.10.20/i18n/Portuguese-Brasil.json"></script> -->
<!-- <link rel="stylesheet" href="css/data-table/bootstrap-table.css"> -->
<!-- <link rel="stylesheet" href="css/data-table/bootstrap-editable.css"> -->

</html>

<script>


$( document ).ready(function() {

  // $('#gerencia').typeahead({
  //  source: function(query, result)
  //  {
  //   $.ajax({
  //    url:"ControlHost/typeahead_gerencia.php",
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

</script>
