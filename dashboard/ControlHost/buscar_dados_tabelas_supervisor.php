<?php
// session_start();
include_once("../Control/connectJS.php");

$idRelatorio  = (isset($_GET['idRelatorio'])) ? $_GET['idRelatorio'] : '';

$sql = "SELECT * from tabela_colaboradores where idRelatorio= '$idRelatorio'  ";
$stm = $conexao->prepare($sql);
if($stm->execute()){
  $dados = $stm->fetchAll(PDO::FETCH_OBJ);
  $json = json_encode($dados);
  echo $json;
}

else{
  echo $stm->errorInfo();
}