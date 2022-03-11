<?php
// session_start();
include_once("connectJS.php");

$sql = "SELECT 
r.id,
r.nomeGerencia,
s.nome,
r.data_inicial,
r.data_final,
r.createdAt,
r.comissaoGerente
from relatorio_cambistas as r, supervisor as s
where r.supervisor = s.id";
$stm = $conexao->prepare($sql);
if($stm->execute()){
  $dados = $stm->fetchAll(PDO::FETCH_OBJ);
  $json = json_encode($dados);
  echo $json;}
else{
  echo "Erro";
}