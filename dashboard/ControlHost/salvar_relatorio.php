<?php
// session_start();
include_once("connectJS.php");

$supervisor  = (isset($_GET['supervisor'])) ? $_GET['supervisor'] : '';
$gerencia  = (isset($_GET['gerencia'])) ? $_GET['gerencia'] : '';
$caixa  = (isset($_GET['caixa'])) ? $_GET['caixa'] : '';
$comissao  = (isset($_GET['comissao'])) ? $_GET['comissao'] : '';
$despesas  = (isset($_GET['despesas'])) ? $_GET['despesas'] : '';
$ajuda_custo  = (isset($_GET['ajuda_custo'])) ? $_GET['ajuda_custo'] : '';

$data_inicial  = (isset($_GET['data_inicial'])) ? $_GET['data_inicial'] : '';
$data_final  = (isset($_GET['data_final'])) ? $_GET['data_final'] : '';

$sql = "INSERT into relatorios(supervisor,gerencia,caixa,comissao,despesas,ajudaCusto, data_inicial, data_final)
values ('$supervisor',
'$gerencia',
'$caixa',
'$comissao',
'$despesas',
'$ajuda_custo',
'$data_inicial',
'$data_final'
)";
$stm = $conexao->prepare($sql);
if($stm->execute()){
  echo "Sucesso";
}
else{
  print_r($stm->errorInfo());
}
