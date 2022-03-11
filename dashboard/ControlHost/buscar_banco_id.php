<?php
// session_start();
include_once("connectJS.php");

$id  = (isset($_GET['id'])) ? $_GET['id'] : '';

$data_inicio  = (isset($_GET['data_inicio'])) ? $_GET['data_inicio'] : '';
$data_fim  = (isset($_GET['data_fim'])) ? $_GET['data_fim'] : '';


$sql = "SELECT f.tipo_movimentacao, f.id, f.descricao, f.valor_movimentado, f.data_movimentacao, f.observacao,
f.conta_bancaria, f.gerencia from financeiro as f 
where 
f.conta_bancaria='$id' 
and DATE_FORMAT(STR_TO_DATE(f.data_movimentacao, '%Y-%m-%d'), '%Y-%m-%d') between '$data_inicio' and '$data_fim' ";
$stm = $conexao->prepare($sql);
if($stm->execute()){
  $dados = $stm->fetchAll(PDO::FETCH_OBJ);
  $json = json_encode($dados);
  echo $json;}
else{
  echo "Erro";
}