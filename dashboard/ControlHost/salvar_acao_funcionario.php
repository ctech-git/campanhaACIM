<?php
// session_start();
include_once("connectJS.php");

$evento  = (isset($_GET['evento'])) ? $_GET['evento'] : '';
$id_func  = (isset($_GET['id_func'])) ? $_GET['id_func'] : '';
$empresa  = (isset($_GET['empresa'])) ? $_GET['empresa'] : '';

$DT = new DateTime( 'now', new DateTimeZone( 'America/Belem') );
$data_adicionado= $DT->format( "d/m/Y H:i:s" );

$sql = "INSERT into acoes
(id_evento,id_empresa,id_funcionario,data_adicionado) values
 ('$evento','$empresa','$id_func','$data_adicionado')";
$stm = $conexao->prepare($sql);
if($stm->execute()){
  echo "Sucesso";
}
else{
  echo "Erro";
}
