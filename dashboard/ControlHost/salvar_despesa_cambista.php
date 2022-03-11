<?php
// session_start();
include_once("connectJS.php");

$idSupervisor_despesa  = (isset($_GET['idSupervisor_despesa'])) ? $_GET['idSupervisor_despesa'] : '';
$idGerente_despesa  = (isset($_GET['idGerente_despesa'])) ? $_GET['idGerente_despesa'] : '';
$descricaoDespesa  = (isset($_GET['descricaoDespesa'])) ? $_GET['descricaoDespesa'] : '';
$valorDespesa  = (isset($_GET['valorDespesa'])) ? $_GET['valorDespesa'] : '';
$dataDespesa  = (isset($_GET['dataDespesa'])) ? $_GET['dataDespesa'] : '';


$DT = new DateTime( 'now', new DateTimeZone( 'America/Belem') );
$data_adicionado= $DT->format( "d/m/Y H:i:s" );

$sql = "INSERT into despesaSupervisor(supervisor,gerencia,descricao,valor,idRelatorio) 
values ('$idSupervisor_despesa',
'$idGerente_despesa',
'$descricaoDespesa',
    '$valorDespesa',
    '$dataDespesa')";
$stm = $conexao->prepare($sql);
if($stm->execute()){
  echo "Sucesso";
}
else{
  echo "Erro";
}