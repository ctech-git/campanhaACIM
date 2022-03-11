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
                <li class="active"><a href="#description">Análise das casas</a></li>
              </ul>
              <div id="myTabContent" class="tab-content custom-product-edit">

                <div class="product-tab-list tab-pane fade active in" id="description">
                  <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                      <div class="review-content-section">
                        <div id="dropzone1" class="pro-ad">
                          <form class="dropzone dropzone-custom needsclick add-professors" id="myForm1">
                            <div class="row">
                              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">



                                <div class="form-group ">
                                  <span><label>Nome da Casa</label></span>
                                  <input oninput="this.value = this.value.toUpperCase()" required name="descricao"
                                    autocomplete="off" id="nomeBanca" type="text" class="form-control"
                                    placeholder="Nome da Gerência">
                                </div>

                                <div class="">
                                  <div style='height: 1000px;' id="summernote"></div>
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-lg-12">
                                <div class="payment-adress">
                                  <button type="submit"
                                    class="btn btn-primary waves-effect waves-light">Adicionar</button>
                                </div>
                              </div>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="product-tab-list tab-pane fade  in" id="relatorioAlternativo">
                  <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                      <div class="review-content-section">
                        <div id="dropzone1" class="pro-ad">
                          <form class="dropzone dropzone-custom needsclick add-professors"
                            id="formRelatorioAlternativo">
                            <div class="row">
                              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">



                                <div class="form-group ">
                                  <span><label>Entrada/Saída</label></span>
                                  <input oninput="this.value = this.value.toUpperCase()" required name="descricao"
                                    autocomplete="off" id="relatorioAlternativo_descricao" type="text"
                                    class="form-control" placeholder="Nome da Gerência">
                                </div>


                                <div class="form-group">
                                  <select required name="tipo_movimentacao" id="relatorioAlternativo_id_supervisor"
                                    class="form-control">
                                    <option value="">Selecione algum supervisor</option>
                                  </select>
                                </div>

                                <div class="form-group ">
                                  <span><label>Valor da comissão</label></span>
                                  <input required name="descricao" autocomplete="off"
                                    id="relatorioAlternativo_comissaoCambista" type="number" class="form-control"
                                    placeholder="Em porcentagem. Ex: 15">
                                </div>

                                <div class="form-group">
                                  <label>Data Inicial</label>
                                  <input required name="data" id="relatorioAlternativo_data_inicial" type="date"
                                    class="form-control" placeholder="Nome da Gerência">
                                </div>
                                <div class="form-group">
                                  <label>Data Final</label>
                                  <input required name="data" id="relatorioAlternativo_data_final" type="date"
                                    class="form-control" placeholder="Nome da Gerência">
                                  <input type='hidden' required name="token" id="relatorioAlternativo_token" type="date"
                                    class="form-control" placeholder="Nome da Gerência">
                                </div>

                                <div class="">
                                  <div style='height: 1000px;' id="relatorioAlternativo_summernote"></div>
                                </div>

                              </div>

                              <table class='table'>
                                <thead id='relatorioAlternativo_cabecalho'></thead>
                                <tbody id='relatorioAlternativo_corpo'>
                                </tbody>
                              </table>
                            </div>
                            <div class="row">
                              <div class="col-lg-12">
                                <div class="payment-adress">
                                  <button type="submit"
                                    class="btn btn-primary waves-effect waves-light">Adicionar</button>
                                </div>
                              </div>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>


                <div class="product-tab-list tab-pane fade  in" id="information">
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

                                          <div class='row' id="">
                                            <div class='col-6 col-md-6' id="toolbar">
                                              <div class="form-group col-6 col-md-6">
                                                <label>Data Inicial</label>
                                                <input required name="data" id="pesquisa_data_inicial"
                                                  value="2021-09-01" type="date" class="form-control"
                                                  placeholder="Nome da Gerência">
                                              </div>
                                              <div class="form-group col-6 col-md-6">
                                                <label>Data Final</label>
                                                <input required name="data" id="pesquisa_data_final" value="2021-09-08"
                                                  type="date" class="form-control" placeholder="Nome da Gerência">
                                              </div>
                                              <button class='btn btn-success'
                                                onclick='pesquisar_tabela()'>Pesquisar</button>
                                            </div>
                                          </div>

                                          <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                            <div class="single-review-st-item res-mg-t-30 table-mg-t-pro-n">
                                              <div class="single-review-st-hd">
                                                <h2>Melhor Gerência</h2>
                                              </div>

                                              <div id='melhor_gerencia'>

                                              </div>

                                            </div>
                                          </div>

                                          <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12" style='display:none'>
                                            <div class="single-review-st-item res-mg-t-30 table-mg-t-pro-n">
                                              <div class="single-review-st-hd">
                                                <h2>Pior Gerência</h2>
                                              </div>

                                              <div id='pior_gerencia'>

                                              </div>

                                            </div>
                                          </div>


                                          <table id='tabela_dados' class='display' style='display:none'>

                                            <thead>
                                              <tr>
                                                <th>ID</th>
                                                <th>Colaborador</th>
                                                <th>Gerência</th>
                                                <th>Entradas</th>
                                                <th>Saídas</th>
                                                <th>Comissões</th>
                                                <th>SubTotal</th>
                                                <th>Vale</th>
                                                <th>Despesas</th>
                                                <th>Comissões</th>
                                                <th>Internet</th>
                                                <th>Total</th>
                                                <th>Comprovantes</th>
                                                <th>Lançamento</th>
                                                <th>Falta</th>
                                                <th></th>
                                              </tr>
                                            </thead>
                                            <tbody>

                                            </tbody>
                                          </table>


                                        </div>
                                      </div>

                                      <div class="row" id='colunas_bancos'>

                                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                          <div class="hpanel widget-int-shape responsive-mg-b-30">
                                            <div class="panel-body">
                                              <div class="stats-title pull-left">
                                                <h4>Total Entradas</h4>
                                              </div>
                                              <div class="stats-icon pull-right">
                                                <i class="educate-icon educate-apps"></i>
                                              </div>
                                              <div class="m-t-xl widget-cl-1">
                                                <h1 class="text-success" id='total_entradas'></h1>
                                              </div>
                                            </div>
                                          </div>
                                        </div>

                                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                          <div class="hpanel widget-int-shape responsive-mg-b-30">
                                            <div class="panel-body">
                                              <div class="stats-title pull-left">
                                                <h4>Total Saídas</h4>
                                              </div>
                                              <div class="stats-icon pull-right">
                                                <i class="educate-icon educate-apps"></i>
                                              </div>
                                              <div class="m-t-xl widget-cl-1">
                                                <h1 class="text-danger" id='total_saidas'></h1>
                                              </div>
                                            </div>
                                          </div>
                                        </div>

                                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                          <div class="hpanel widget-int-shape responsive-mg-b-30">
                                            <div class="panel-body">
                                              <div class="stats-title pull-left">
                                                <h4>Com. Cambista</h4>
                                              </div>
                                              <div class="stats-icon pull-right">
                                                <i class="educate-icon educate-apps"></i>
                                              </div>
                                              <div class="m-t-xl widget-cl-1">
                                                <h1 class="text-success" id='total_comissoes'></h1>
                                              </div>
                                            </div>
                                          </div>
                                        </div>

                                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                          <div class="hpanel widget-int-shape responsive-mg-b-30">
                                            <div class="panel-body">
                                              <div class="stats-title pull-left">
                                                <h4> Subtotal</h4>
                                              </div>
                                              <div class="stats-icon pull-right">
                                                <i class="educate-icon educate-apps"></i>
                                              </div>
                                              <div class="m-t-xl widget-cl-1">
                                                <h1 class="text-success" id='soma_subtotal'> </h1>
                                              </div>
                                            </div>
                                          </div>
                                        </div>

                                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                          <div class="hpanel widget-int-shape responsive-mg-b-30">
                                            <div class="panel-body">
                                              <div class="stats-title pull-left">
                                                <h4>Comissão de Gerente</h4>
                                              </div>
                                              <div class="stats-icon pull-right">
                                                <i class="educate-icon educate-apps"></i>
                                              </div>
                                              <div class="m-t-xl widget-cl-1">
                                                <h1 class="text-success" id='soma_gerente_subtotal'> </h1>
                                              </div>
                                            </div>
                                          </div>
                                        </div>

                                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                          <div class="hpanel widget-int-shape responsive-mg-b-30">
                                            <div class="panel-body">
                                              <div class="stats-title pull-left">
                                                <h4>Total a pagar</h4>
                                              </div>
                                              <div class="stats-icon pull-right">
                                                <i class="educate-icon educate-apps"></i>
                                              </div>
                                              <div class="m-t-xl widget-cl-1">
                                                <h1 class="text-success" id='total_pagar'> </h1>
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

                <div class="product-tab-list tab-pane fade  in" id="supervisor">

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

                                            <div class="form-group col-lg-3 col-md-3">
                                              <label>Supervisor</label>
                                              <select required name="tipo_movimentacao"
                                                onchange="buscar_todos_gerente_supervisor()" id="idSupervisor"
                                                class="form-control">
                                                <option value="none" selected="" disabled="">Selecione o
                                                  supervisor
                                                </option>
                                              </select>
                                            </div>

                                            <div class="form-group col-lg-3 col-md-3">
                                              <label>Gerente</label>
                                              <select required name="tipo_movimentacao"
                                                onchange="buscar_data_supervisor()" id="idGerente" class="form-control">
                                                <option value="none" selected="" disabled="">Selecione o
                                                  gerente
                                                </option>
                                              </select>
                                            </div>

                                            <div class="form-group col-lg-3 col-md-3">
                                              <label>Data</label>
                                              <select required name="tipo_movimentacao"
                                                onchange="buscar_relatorio_supervisor()" id="dataSupervisor"
                                                class="form-control">
                                                <option value="none" selected="" disabled="">Selecione a data
                                                </option>
                                              </select>

                                            </div>

                                            <div class="form-group col-lg-3 col-md-3">
                                              <label>Compartilhar</label><br />
                                              <button class='btn btn-success' onclick="gerar_link_cambista()">Link
                                                Cambista</button>
                                            </div>
                                          </div>


                                          <table id='tabela_dados_supervisor' class='display'>

                                            <thead>
                                              <tr>
                                                <th>ID</th>
                                                <th>Colaborador</th>
                                                <!-- <th>Gerência</th> -->
                                                <th>Entradas</th>
                                                <th>Saídas</th>
                                                <th>Comissões</th>
                                                <th>SubTotal</th>
                                                <th>Vale</th>
                                                <th>Despesas</th>
                                                <th>Comissões</th>
                                                <th>Internet</th>
                                                <th>Total</th>
                                                <th>Comprovantes</th>
                                                <th>Lançamento</th>
                                                <th>Falta</th>
                                                <th></th>
                                              </tr>
                                            </thead>
                                            <tbody>

                                            </tbody>
                                          </table>


                                        </div>
                                      </div>

                                      <div class="row" id='colunas_bancos'>

                                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                          <div class="hpanel widget-int-shape responsive-mg-b-30">
                                            <div class="panel-body">
                                              <div class="stats-title pull-left">
                                                <h4>Total Entradas</h4>
                                              </div>
                                              <div class="stats-icon pull-right">
                                                <i class="educate-icon educate-apps"></i>
                                              </div>
                                              <div class="m-t-xl widget-cl-1">
                                                <h1 class="text-success" id='total_entradas_supervisor'></h1>
                                              </div>
                                            </div>
                                          </div>
                                        </div>

                                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                          <div class="hpanel widget-int-shape responsive-mg-b-30">
                                            <div class="panel-body">
                                              <div class="stats-title pull-left">
                                                <h4>Total Saídas</h4>
                                              </div>
                                              <div class="stats-icon pull-right">
                                                <i class="educate-icon educate-apps"></i>
                                              </div>
                                              <div class="m-t-xl widget-cl-1">
                                                <h1 class="text-danger" id='total_saidas_supervisor'></h1>
                                              </div>
                                            </div>
                                          </div>
                                        </div>

                                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                          <div class="hpanel widget-int-shape responsive-mg-b-30">
                                            <div class="panel-body">
                                              <div class="stats-title pull-left">
                                                <h4>Com. Cambista</h4>
                                              </div>
                                              <div class="stats-icon pull-right">
                                                <i class="educate-icon educate-apps"></i>
                                              </div>
                                              <div class="m-t-xl widget-cl-1">
                                                <h1 class="text-success" id='total_comissoes_supervisor'></h1>
                                              </div>
                                            </div>
                                          </div>
                                        </div>

                                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                          <div class="hpanel widget-int-shape responsive-mg-b-30">
                                            <div class="panel-body">
                                              <div class="stats-title pull-left">
                                                <h4> Subtotal</h4>
                                              </div>
                                              <div class="stats-icon pull-right">
                                                <i class="educate-icon educate-apps"></i>
                                              </div>
                                              <div class="m-t-xl widget-cl-1">
                                                <h1 class="text-success" id='soma_subtotal_supervisor'> </h1>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>

                                      <div class="row">
                                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                          <div class="hpanel widget-int-shape responsive-mg-b-30">
                                            <div class="panel-body">
                                              <div class="stats-title pull-left">
                                                <h4>Comissão de Gerente</h4>
                                              </div>
                                              <div class="stats-icon pull-right">
                                                <i class="educate-icon educate-apps"></i>
                                              </div>
                                              <div class="m-t-xl widget-cl-1">
                                                <h1 class="text-success" id='soma_gerente_subtotal_supervisor'>
                                                </h1>
                                              </div>
                                            </div>
                                          </div>
                                        </div>

                                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                          <div class="hpanel widget-int-shape responsive-mg-b-30">
                                            <div class="panel-body">
                                              <div class="stats-title pull-left">
                                                <h4>Despesa Gerente</h4>
                                              </div>
                                              <div class="stats-icon pull-right">
                                                <i class="educate-icon educate-apps"></i>
                                              </div>
                                              <div class="m-t-xl widget-cl-1">
                                                <h1 class="text-danger" id='total_despesa_supervisor'> </h1>
                                              </div>
                                            </div>
                                          </div>
                                        </div>

                                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                          <div class="hpanel widget-int-shape responsive-mg-b-30">
                                            <div class="panel-body">
                                              <div class="stats-title pull-left">
                                                <h4>Total a pagar</h4>
                                              </div>
                                              <div class="stats-icon pull-right">
                                                <i class="educate-icon educate-apps"></i>
                                              </div>
                                              <div class="m-t-xl widget-cl-1">
                                                <h1 class="text-success" id='total_pagar_supervisor'> </h1>
                                              </div>
                                            </div>
                                          </div>
                                        </div>

                                        <style>
                                        .ultima_linha_preta {
                                          background: #5cb85c !important;
                                          color: white;
                                        }

                                        td {
                                          font-weight: bold !important;
                                        }
                                        </style>



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

                <div class="product-tab-list tab-pane fade  in" id="despesa_supervisor">

                  <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                      <div class="review-content-section">
                        <form class="" id="formularioDespesas">
                          <div class="row">
                            <h3>Adicionar Despesa a um Gerente </h3>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                              <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                <div class="form-group col-lg-6 col-md-6">
                                  <label>Supervisor</label>
                                  <select required name="tipo_movimentacao" onchange="buscar_gerentes_supervisor()"
                                    id="idSupervisor_despesa" class="form-control">
                                    <option value="none" selected="" disabled="">Selecione o
                                      supervisor
                                    </option>
                                  </select>
                                </div>

                                <div class="form-group col-lg-6 col-md-6">
                                  <span><label>Gerente</label></span>
                                  <select required name="tipo_movimentacao" id="idGerente_despesa"
                                    onchange="buscar_data_gerentes_supervisor()" class="form-control">
                                    <option value="none" selected="" disabled="">Selecione o
                                      Gerente
                                    </option>
                                    <option value="supervisor">Despesa do supervisor
                                    </option>
                                  </select>
                                </div>
                                <div class="form-group ">
                                  <span><label>Descrição da despesa</label></span>
                                  <input oninput="this.value = this.value.toUpperCase()" required name="descricao"
                                    autocomplete="off" id="descricaoDespesa" type="text" class="form-control"
                                    placeholder="Descrição da despesa">
                                </div>
                                <div class="form-group ">
                                  <span><label>Valor</label></span>
                                  <input oninput="this.value = this.value.toUpperCase()" required name="descricao"
                                    autocomplete="off" id="valorDespesa" type="text"
                                    class="form-control produto_em_reais" placeholder="Valor em R$ 0,00">
                                </div>

                                <div class="form-group col-lg-6 col-md-6">
                                  <label>Data da Movimentação</label>
                                  <select required name="tipo_movimentacao" id="dataDespesa" class="form-control">
                                    <option value="none" selected="" disabled="">Selecione a data
                                    </option>
                                  </select>
                                </div>

                              </div>
                            </div>
                            <div class="row">
                              <div class="col-lg-12">
                                <div class="payment-adress">
                                  <button type="submit" id='botao_adicionar_despesa'
                                    class="btn btn-primary waves-effect waves-light">Adicionar</button>
                                </div>
                              </div>
                            </div>
                        </form>

                        <div class="row">
                          <div class="col-lg-12">
                            <div class="data-table-area mg-b-15">
                              <div class="container-fluid">
                                <div class="row">
                                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="sparkline13-list">
                                      <div class="sparkline13-hd">
                                        <div class="main-sparkline13-hd">
                                          <h1>Tabela de Despesas</h1>
                                        </div>
                                      </div>

                                      <div class="sparkline13-graph">
                                        <div class="datatable-dashv1-list custom-datatable-overright">
                                          <table id='tabela_despesa_gerente' class='display'>

                                            <thead>
                                              <tr>
                                                <th>ID</th>
                                                <th>Supervisor</th>
                                                <th>Gerência</th>
                                                <th>Descrição</th>
                                                <th>Valor</th>
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

  <?php require_once('modal_financeiro.php') ?>
  <?php require_once('modal_despesas.php') ?>

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

<script src="js_nova/analises.js"></script>

</html>

<script>
$(document).ready(function() {

  //pesquisar_tabela();
  // buscar_supervisor();
  // tabelaDespesas();

  $('.produto_em_reais').mask('#.##0,00', {
    reverse: true
  });


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

  $('#summernote').summernote({
    height: 300,
    tabsize: 2,
    minHeight: 200,
    maxHeight: null,
  });

  $('#relatorioAlternativo_summernote').summernote({
    height: 300,
    tabsize: 2,
    minHeight: 200,
    maxHeight: null,
  });


  $('#summernote').summernote('codeview.toggle');
  $('#relatorioAlternativo_summernote').summernote('codeview.toggle');



  $('#descricao').typeahead({
    source: function(query, result) {
      $.ajax({
        url: "ControlHost/fornecedores.php",
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
});
</script>