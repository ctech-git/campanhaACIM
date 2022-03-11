<?php
// session_start();
include_once("../Control/connectJS.php");

$nome_completo  = (isset($_GET['nome_completo'])) ? $_GET['nome_completo'] : '';

$sql = "SELECT * from venda_cartola where nome_completo='$nome_completo' ";
$stm = $conexao->prepare($sql);
if($stm->execute()){
  $dados = $stm->fetchAll(PDO::FETCH_OBJ);
  $json = json_encode($dados);
  echo $json;
}

else{
  echo $stm->errorInfo();
}
