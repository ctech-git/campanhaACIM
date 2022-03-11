<?php
// session_start();
include_once("../Control/connectJS.php");

// $hoje = date('d/m');
$hoje = date('m');

$sql = "SELECT * from cambistas where data_nascimento like '%/$hoje/%'  group by nome_completo";
$stm = $conexao->prepare($sql);
if($stm->execute()){
  $dados = $stm->fetchAll(PDO::FETCH_OBJ);
  $json = json_encode($dados);
  echo $json;
}

else{
  echo $stm->errorInfo();
}