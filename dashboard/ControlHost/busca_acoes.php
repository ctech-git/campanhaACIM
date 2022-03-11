<?php
// session_start();
include_once("connectJS.php");

$sql = "SELECT a.id_evento, a.id_funcionario from acoes as a";
$stm = $conexao->prepare($sql);
if($stm->execute()){
  $dados = $stm->fetchAll(PDO::FETCH_OBJ);
  $json = json_encode($dados);
  echo $json;}
else{
  echo "Erro";
}
