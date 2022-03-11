<?php
// session_start();
include_once("../Control/connectJS.php");

$nome_gerente  = (isset($_GET['nome_gerente'])) ? $_GET['nome_gerente'] : '';

$sql = "SELECT * from tabela_colaboradores where colaborador='$nome_gerente' ";
$stm = $conexao->prepare($sql);
if($stm->execute()){
  $dados = $stm->fetchAll(PDO::FETCH_OBJ);
  $json = json_encode($dados);
  echo $json;
}

else{
  echo $stm->errorInfo();
}
