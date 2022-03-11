<?php
// session_start();
include_once("../Control/connectJS.php");

$gerencia  = (isset($_GET['gerencia'])) ? $_GET['gerencia'] : '';
$cambista  = (isset($_GET['cambista'])) ? $_GET['cambista'] : '';

$sql = "SELECT * from despesas where gerencia='$gerencia' and cambista='$cambista' ";
$stm = $conexao->prepare($sql);
if($stm->execute()){
  $dados = $stm->fetchAll(PDO::FETCH_OBJ);
  $json = json_encode($dados);
  echo $json;
}

else{
  echo $stm->errorInfo();
}
