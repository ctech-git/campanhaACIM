<?php
// session_start();
include_once("connectJS.php");

$descricao  = (isset($_GET['descricao'])) ? $_GET['descricao'] : '';
$valor  = (isset($_GET['valor'])) ? $_GET['valor'] : '';
$empresa  = (isset($_GET['empresa'])) ? $_GET['empresa'] : '';

$DT = new DateTime( 'now', new DateTimeZone( 'America/Belem') );
$data_adicionado= $DT->format( "d/m/Y H:i:s" );

$sql = "INSERT into eventos
(nome_evento,valor_evento,id_empresa,data_adicionado) values
 ('$descricao','$valor','$empresa','$data_adicionado')";
$stm = $conexao->prepare($sql);
if($stm->execute()){
  echo "Sucesso";
}
else{
  echo "Erro";
}
