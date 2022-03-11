<?php
// session_start();
include_once("connectJS.php");

$id_supervisor  = (isset($_GET['id_supervisor'])) ? $_GET['id_supervisor'] : '';
$descricao  = (isset($_GET['descricao'])) ? $_GET['descricao'] : '';
$data_inicial  = (isset($_GET['data_inicial'])) ? $_GET['data_inicial'] : '';
$data_final  = (isset($_GET['data_final'])) ? $_GET['data_final'] : '';
$comissaoGerente  = (isset($_GET['comissaoGerente'])) ? $_GET['comissaoGerente'] : '';

$sql = "INSERT into relatorio_cambistas(nomeGerencia,supervisor, data_inicial, data_final, comissaoGerente)
values ('$descricao',
'$id_supervisor',
'$data_inicial',
'$data_final',
'$comissaoGerente'
)";
$stm = $conexao->prepare($sql);
if($stm->execute()){
  $id = $conexao->lastInsertId();
  echo $id;
}
else{
  print_r($stm->errorInfo());
}