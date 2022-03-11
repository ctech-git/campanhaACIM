<?php
// session_start();
include_once("../connectJS.php");


$sql = "SELECT t.gerente, s.nome from tabela_colaboradores as t, supervisor as s where t.supervisor = s.id
group by gerente";
$stm = $conexao->prepare($sql);
if($stm->execute()){
  $dados = $stm->fetchAll(PDO::FETCH_OBJ);
  $json = json_encode($dados);
  echo $json;
}

else{
  echo $stm->errorInfo();
}