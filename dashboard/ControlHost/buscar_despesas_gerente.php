<?php
// session_start();
include_once("connectJS.php");

$sql = "SELECT d.gerencia, d.descricao, d.valor, r.data_inicial, r.data_final, d.id, d.supervisor, s.nome as nomeSupervisor
from despesaSupervisor as d,  supervisor as s, relatorio_cambistas as r
where d.supervisor = s.id
and d.idRelatorio = r.id
";
$stm = $conexao->prepare($sql);
if($stm->execute()){
  $dados = $stm->fetchAll(PDO::FETCH_OBJ);
  $json = json_encode($dados);
  echo $json;}
else{
  print_r($stm->errorInfo());
}