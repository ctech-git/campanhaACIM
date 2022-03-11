<?php
// session_start();
include_once("connectJS.php");

$idSupervisor  = (isset($_GET['idSupervisor'])) ? $_GET['idSupervisor'] : '';

$sql = "SELECT id,gerente from tabela_colaboradores where supervisor = '$idSupervisor' group by gerente";
$stm = $conexao->prepare($sql);
if($stm->execute()){
  $dados = $stm->fetchAll(PDO::FETCH_OBJ);
  $json = json_encode($dados);
  echo $json;}
else{
  print_r($stm->errorInfo());
}