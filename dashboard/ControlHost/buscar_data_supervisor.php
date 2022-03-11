<?php
// session_start();
include_once("connectJS.php");

$idSupervisor  = (isset($_GET['idSupervisor'])) ? $_GET['idSupervisor'] : '';
$idGerente  = (isset($_GET['idGerente'])) ? $_GET['idGerente'] : '';

$sql = "SELECT * from relatorio_cambistas where supervisor = '$idSupervisor' and nomeGerencia ='$idGerente'";
$stm = $conexao->prepare($sql);
if($stm->execute()){
  $dados = $stm->fetchAll(PDO::FETCH_OBJ);
  $json = json_encode($dados);
  echo $json;}
else{
  print_r($stm->errorInfo());
}