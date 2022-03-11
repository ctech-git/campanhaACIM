<?php
// session_start();
include_once("connectJS.php");


 $data_inicio  = (isset($_GET['data_inicio'])) ? $_GET['data_inicio'] : '';
 $data_fim  = (isset($_GET['data_fim'])) ? $_GET['data_fim'] : '';

$sql = "SELECT 
f.tipo_movimentacao,
f.valor_movimentado,
c.descricao,
f.observacao
from financeiro as f, centro_de_custo as c
where
DATE_FORMAT(STR_TO_DATE(f.data_movimentacao, '%Y-%m-%d'), '%Y-%m-%d') between '$data_inicio' and '$data_fim'
and f.centro_de_custo = c.id";
$stm = $conexao->prepare($sql);
if($stm->execute()){
  $dados = $stm->fetchAll(PDO::FETCH_OBJ);
  $json = json_encode($dados);
  echo $json;}
else{
  echo "Erro";
}