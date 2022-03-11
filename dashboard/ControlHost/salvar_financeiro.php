<?php
// session_start();
include_once("connectJS.php");

$tipo_movimentacao  = (isset($_GET['tipo_movimentacao'])) ? $_GET['tipo_movimentacao'] : '';
$descricao  = (isset($_GET['descricao'])) ? $_GET['descricao'] : '';
$valor_movimentado  = (isset($_GET['valor_movimentado'])) ? $_GET['valor_movimentado'] : '';
$data_movimentacao  = (isset($_GET['data_movimentacao'])) ? $_GET['data_movimentacao'] : '';
$observacao  = (isset($_GET['observacao'])) ? $_GET['observacao'] : '';
$conta_bancaria  = (isset($_GET['conta_bancaria'])) ? $_GET['conta_bancaria'] : '';
$centro_de_custo  = (isset($_GET['centro_de_custo'])) ? $_GET['centro_de_custo'] : '';
$gerencia  = (isset($_GET['gerencia'])) ? $_GET['gerencia'] : '';

$idEmpresa  = (isset($_GET['idEmpresa'])) ? $_GET['idEmpresa'] : '';


$sql = "INSERT into financeiro(
  tipo_movimentacao,descricao,valor_movimentado,data_movimentacao,observacao,conta_bancaria,
   centro_de_custo, gerencia,idEmpresa)
values ('$tipo_movimentacao',
'$descricao',
'$valor_movimentado',
'$data_movimentacao',
'$observacao',
'$conta_bancaria',
'$centro_de_custo',
'$gerencia',
'$idEmpresa'
)";
$stm = $conexao->prepare($sql);
if($stm->execute()){
  echo "Sucesso";
}
else{
  print_r($stm->errorInfo());
}