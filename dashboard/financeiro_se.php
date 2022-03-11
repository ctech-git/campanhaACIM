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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>

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
                <li class="active"><a href="#description">Entrada/Saída</a></li>
                <li><a href="#information">Relatório Geral</a></li>
                <li><a href="#bancos">Bancos</a></li>
              </ul>

              <div id="myTabContent" class="tab-content custom-product-edit">


                <hr>
                </hr>

                <div id="toolbar" class='row'>
                  <div class="form-group col-3 col-md-3 col-lg-3">
                    <label>Data Inicial</label>
                    <input required name="data" id="pesquisa_data_inicial" type="date" class="form-control">
                  </div>
                  <div class="form-group col-3 col-md-3 col-lg-3">
                    <label>Data Final</label>
                    <input required name="data" id="pesquisa_data_final" type="date" class="form-control">
                  </div>
                  <div class="form-group col-3 col-md-3 col-lg-3">
                    <label>Pesquisar</label><br />
                    <button class='btn btn-primary' onclick="relatorio_financeiro()">Buscar</button>
                  </div>
                </div>

                <hr>
                </hr>

                <div class="product-tab-list tab-pane fade active in" id="description">
                  <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                      <div class="review-content-section">
                        <div id="dropzone1" class="pro-ad">
                          <form class="dropzone dropzone-custom needsclick add-professors" id="relatorio_gerencial">
                            <div class="row">
                              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

                                <div class="form-group">
                                  <span><label>Entrada/Saída</label></span>
                                  <select required name="tipo_movimentacao" id="tipo_movimentacao" class="form-control">
                                    <option value="none" selected="" disabled="">Selecione o tipo</option>
                                    <option value="entrada">Entrada</option>
                                    <option value="saida">Saída</option>
                                  </select>
                                </div>

                                <div class="form-group" style='display:none'>
                                  <span><label>Descrição</label></span>
                                  <input style="text-transform: uppercase;" required name="categoria" autocomplete="off"
                                    id="descricao" type="text" class="form-control" placeholder="Ex. Fechamento X">
                                </div>

                                <div class="form-group">
                                  <span><label>Valor movimentado</label></span>
                                  <input name="categoria" autocomplete="off" id="valor_movimentado" type="text"
                                    class="form-control produto_em_reais" placeholder="Ex: R$ 100,00">
                                </div>

                                <div class="form-group">
                                  <span><label>Data da movimentação</label></span>
                                  <input name="categoria" autocomplete="off" id="data_movimentacao" type="date"
                                    class="form-control " placeholder="Caixa">
                                </div>

                                <div class="form-group">
                                  <span><label>Escolha seu banco</label></span>
                                  <select required name="tipo_movimentacao" id="conta_bancaria" class="form-control">
                                    <option value="none" selected="" disabled="">Selecione o banco</option>
                                    <option value="1">Banco do Brasil</option>
                                    <option value="2">Bradesco</option>
                                    <option value="3">MB Caixa</option>
                                    <option value="4">Caixa 28858-9</option>
                                    <option value="5">Caixa 26231-6</option>
                                    <option value="6">Caixa 16550-0</option>
                                    <option value="7">Nubank</option>
                                    <option value="8">Mercado Pago</option>
                                  </select>
                                </div>

                                <div class="form-group">
                                  <span><label>Observação</label></span>
                                  <input style="text-transform: uppercase;" required name="categoria" autocomplete="off"
                                    id="observacao" type="text" class="form-control" placeholder="">
                                </div>


                                <div class="form-group">
                                  <span><label>Pertence a algum centro de custo?</label></span>
                                  <select required name="tipo_movimentacao" id="centro_de_custo_principal"
                                    class="form-control">
                                    <option value="none" selected="" disabled="">Selecione o centro</option>
                                  </select>
                                </div>


                                <div class="form-group">
                                  <span><label>Escolha uma gerência</label></span>
                                  <select required name="tipo_movimentacao" id="gerencia" class="form-control">
                                    <option value="none" selected="" disabled="">Selecione o sócio</option>
                                  </select>
                                </div>

                                <div class="form-group">
                                  <span><label>Escolha uma empresa</label></span>
                                  <select required name="tipo_movimentacao" id="idEmpresa" class="form-control">
                                    <option value="none" selected="" disabled="">Selecione a empresa</option>
                                    <option value="1">SE - Cyro</option>
                                    <option value="2">Bet365</option>
                                    <option value="3">SE - Pitu</option>
                                  </select>
                                </div>
                          </form>



                        </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-12">
                          <div class="payment-adress">
                            <button type="button" onclick="salvar_form_relatorio()" id='botao_adicionar'
                              class="btn btn-primary waves-effect waves-light">Adicionar</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>


            <div class="product-tab-list tab-pane fade in" id="information">
              <div class="container-fluid">

                <div class="row">

                  <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="hpanel shadow-inner hbggreen bg-1 responsive-mg-b-30">
                      <div class="panel-body">
                        <div class="text-center content-bg-pro">
                          <h3> Entradas</h3>
                          <p id='soma_entradas' class="text-big font-light">
                            20
                          </p>
                          <small>
                          </small>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="hpanel shadow-inner hbgred bg-4 res-tablet-mg-t-30 dk-res-t-pro-30">
                      <div class="panel-body">
                        <div class="text-center content-bg-pro">
                          <h3>Saídas</h3>
                          <p id='soma_saidas' class="text-big font-light">
                            0,43
                          </p>
                          <small>
                          </small>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="hpanel shadow-inner hbgblue bg-2 responsive-mg-b-30">
                      <div style='background: #3498db !important' class="panel-body">
                        <div class="text-center content-bg-pro">
                          <h3>Total</h3>
                          <p id='soma_geral' class="text-big font-light">

                          </p>
                          <small>
                          </small>
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="analytics-sparkle-line reso-mg-b-30 table-mg-t-pro dk-res-t-pro-30">
                          <div class="analytics-content">
                            <h5>Contas a receber</h5>
                            <h2>R$<span class="counter"></span> </h2>
                            <span class="text-info">60%</span>
                            <div class="progress m-b-0">
                              <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:60%;"> <span class="sr-only">20% Complete</span> </div>
                            </div>
                          </div>
                        </div>
                      </div> -->
                  <!-- <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="analytics-sparkle-line table-mg-t-pro dk-res-t-pro-30">
                          <div class="analytics-content">
                            <h5>Contas a pagar</h5>
                            <h2>$<span class="counter">3500</span> </h2>
                            <span class="text-inverse">80%</span>
                            <div class="progress m-b-0">
                              <div class="progress-bar progress-bar-inverse" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:80%;"> <span class="sr-only">230% Complete</span> </div>
                            </div>
                          </div>
                        </div>
                      </div> -->
                </div>

                <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <table id='relatorioGerencial' class='display' style='margin: 0px !important; width: 100%'>
                      <thead>
                        <tr>
                          <th></th>
                          <th></th>
                          <th>Tipo</th>
                          <th>Data</th>
                          <th>Descrição</th>
                          <th>Observação</th>
                          <th>Conta Bancária</th>
                          <th>Valor</th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                      </tbody>
                      <tfoot>
                        <tr>
                          <th colspan="7" style="text-align:right">Total:</th>
                          <th></th>
                        </tr>
                      </tfoot>
                    </table>
                  </div>
                  <style>
                  th {
                    white-space: nowrap;
                  }
                  </style>
                  <!--
                    <div class="col-6 col-sm-6 col-md-6" style=''>
                      <canvas style='width:100%' id="grafico_caixas"></canvas>
                    </div>
                    <div class="col-6 col-sm-6 col-md-6" style=''>
                      <canvas  style='width:100%' id="grafico_despesas"></canvas>
                    </div> -->

                  <!-- <div class="pie-bar-line-area" style='margin-top:80px !important'>
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
                    </div> -->

                </div>

                <div id="row">
                  <div class='col-12 col-md-12 col-lg-12' id='grafico_despesas'>

                  </div>

                </div>


              </div>
            </div>

            <div class="product-tab-list tab-pane fade in" id="bancos">
              <div class="container-fluid">



                <div class="row" id='colunas_bancos'>


                </div>

                <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <table id='relatorioBanco' class='display responsive' style='margin: 0px !important; width: 100%'>
                      <thead>
                        <tr>
                          <th></th>
                          <th>Tipo</th>
                          <th>Descrição</th>
                          <th>Valor</th>
                          <th>Data</th>
                          <th>Conta Bancária</th>
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
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>

  </div>


  <div class="modal fade" id="modal_editar_relatorio" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
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

            <input type='hidden' id='e_id' />

            <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <span><label>Entrada/Saída</label></span>
              <select required name="tipo_movimentacao" id="e_tipo_movimentacao" class="form-control">
                <option value="none" selected="" disabled="">Selecione o tipo</option>
                <option value="entrada">Entrada</option>
                <option value="saida">Saída</option>
              </select>
            </div>

            <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <span><label>Descrição</label></span>
              <input required name="categoria" autocomplete="off" id="e_descricao" type="text" class="form-control"
                placeholder="Ex. Fechamento X">
            </div>

            <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <span><label>Valor movimentado</label></span>
              <input name="categoria" autocomplete="off" id="e_valor_movimentado" type="text"
                class="form-control produto_em_reais" placeholder="Ex: R$ 100,00">
            </div>

            <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <span><label>Data da movimentação</label></span>
              <input name="categoria" autocomplete="off" id="e_data_movimentacao" type="date" class="form-control "
                placeholder="Caixa">
            </div>

            <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <span><label>Escolha seu banco</label></span>
              <select required name="tipo_movimentacao" id="e_conta_bancaria" class="form-control">
                <option value="none" selected="" disabled="">Selecione o banco</option>
                <option value="1">Banco do Brasil</option>
                <option value="2">Bradesco</option>
                <option value="3">MB Caixa</option>
                <option value="4">Caixa 28858-9</option>
                <option value="5">Caixa 26231-6</option>
                <option value="6">Caixa 16550-0</option>
                <option value="7">Nubank</option>
                <option value="8">Mercado Pago</option>
              </select>
            </div>

            <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <span><label>Observação</label></span>
              <input required name="categoria" autocomplete="off" id="e_observacao" type="text" class="form-control"
                placeholder="">
            </div>

            <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <span><label>Pertence a algum centro de custo?</label></span>
              <select required name="tipo_movimentacao" id="e_centro_de_custo" class="form-control">
                <option value="none" selected="" disabled="">Selecione o centro</option>
              </select>
            </div>

            <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <span><label>Escolha uma gerência</label></span>
              <select required name="tipo_movimentacao" id="e_gerencia" class="form-control">
                <option value="none" selected="" disabled="">Selecione o sócio</option>
              </select>
            </div>

            </form>
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
          <button type="button" id='botao_atualizar' onclick='atualizar_relatorio()'
            class="btn btn-primary">Atualizar</button>
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
  <script src="js_nova/relatorio_financeiro.js"></script>
  <script src="js_nova/relatorios.js"></script>
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

  $('#gerencia').typeahead({
    source: function(query, result) {
      $.ajax({
        url: "ControlHost/typeahead_gerencia.php",
        method: "POST",
        data: {
          query: query
        },
        dataType: "json",
        success: function(data) {
          result($.map(data, function(item) {
            return item;
          }));
        }
      })
    }
  });

  $('#cambista').typeahead({
    source: function(query, result) {
      var gerencia = $('#gerencia').val();

      $.ajax({
        url: "ControlHost/typeahead_cambista.php",
        method: "POST",
        data: {
          query: query,
          gerencia: gerencia
        },
        dataType: "json",
        success: function(data) {
          result($.map(data, function(item) {
            return item;
          }));
        }
      })
    }
  });

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
  today = yyyy + '-' + mm + '-' + dd;
  document.getElementById("data_movimentacao").value = today;

  decidir_data_inicial();

  buscar_centros();
  buscar_socios();

  relatorio_financeiro();
});
</script>