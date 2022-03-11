<?php
// session_start();
include_once("connectJS.php");



$sql = "SELECT * from cambistaIP";
$stm = $conexao->prepare($sql);
if($stm->execute()){
  $dados = $stm->fetchAll(PDO::FETCH_OBJ);
  $json = json_encode($dados);
  echo $json;}
else{
  echo "Erro";
}