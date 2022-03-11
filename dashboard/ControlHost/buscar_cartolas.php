<?php
// session_start();
include_once("../Control/connectJS.php");


$sql = "SELECT id,nome_completo,telefone,horario,profissional,data_adicionado from venda_cartola ";
$stm = $conexao->prepare($sql);
if($stm->execute()){
  $dados = $stm->fetchAll(PDO::FETCH_OBJ);
  $json = json_encode($dados);
  echo $json;
}

else{
  echo $stm->errorInfo();
}
