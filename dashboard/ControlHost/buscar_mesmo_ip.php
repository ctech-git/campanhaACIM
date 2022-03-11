<?php
// session_start();
include_once("connectJS.php");

$ips  = (isset($_GET['ips'])) ? $_GET['ips'] : '';


$sql = "SELECT * from cambistaIP where ip='$ips'";
$stm = $conexao->prepare($sql);
if($stm->execute()){
  $dados = $stm->fetchAll(PDO::FETCH_OBJ);
  $json = json_encode($dados);
  echo $json;}
else{
  echo "Erro";
}