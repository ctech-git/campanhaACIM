<?php
// session_start();
include_once("connectJS.php");

$gerencia  = (isset($_GET['gerencia'])) ? $_GET['gerencia'] : '';
$cambista  = (isset($_GET['cambista'])) ? $_GET['cambista'] : '';
$descricao  = (isset($_GET['descricao'])) ? $_GET['descricao'] : '';
$valor  = (isset($_GET['valor'])) ? $_GET['valor'] : '';


$DT = new DateTime( 'now', new DateTimeZone( 'America/Belem') );
$data_adicionado= $DT->format( "d/m/Y H:i:s" );

$sql = "INSERT into despesas(gerencia,cambista,descricao,
  valor,data_adicionado) values ('$gerencia','$cambista','$descricao',
    '$valor','$data_adicionado')";
$stm = $conexao->prepare($sql);
if($stm->execute()){
  echo "Sucesso";
}
else{
  echo "Erro";
}
