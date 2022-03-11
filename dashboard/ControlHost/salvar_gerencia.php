<?php
// session_start();
include_once("connectJS.php");

$nome_gerencia  = (isset($_GET['nome_gerencia'])) ? $_GET['nome_gerencia'] : '';
$telefone  = (isset($_GET['telefone'])) ? $_GET['telefone'] : '';
$id_supervisor  = (isset($_GET['id_supervisor'])) ? $_GET['id_supervisor'] : '';
$cidade  = (isset($_GET['cidade'])) ? $_GET['cidade'] : '';
$comissao  = (isset($_GET['comissao'])) ? $_GET['comissao'] : '';

$DT = new DateTime( 'now', new DateTimeZone( 'America/Belem') );
$data_adicionado= $DT->format( "d/m/Y H:i:s" );

$sql = "INSERT into gerencia(nome_gerencia,telefone,id_supervisor, cidade,data_cadastro,comissao)
values ('$nome_gerencia','$telefone','$id_supervisor','$cidade','$data_adicionado','$comissao')";
$stm = $conexao->prepare($sql);
if($stm->execute()){
  echo "Sucesso";
}
else{
  echo "Erro";
}
