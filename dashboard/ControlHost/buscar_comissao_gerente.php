<?php
// session_start();
include_once("connectJS.php");

$idRelatorio  = (isset($_GET['idRelatorio'])) ? $_GET['idRelatorio'] : '';

$sql = "SELECT comissaoGerente from relatorio_cambistas where id = '$idRelatorio'";
$stm = $conexao->prepare($sql);
if($stm->execute()){
  $dados = $stm->fetchAll(PDO::FETCH_OBJ);
  $json = json_encode($dados);
  echo $json;}
else{
  print_r($stm->errorInfo());
}