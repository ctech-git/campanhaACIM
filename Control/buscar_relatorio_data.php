<?php
// session_start();
include_once("connectJS.php");

$gerente_entrada  = (isset($_GET['gerente_entrada'])) ? $_GET['gerente_entrada'] : '';
$gerente_saida  = (isset($_GET['gerente_saida'])) ? $_GET['gerente_saida'] : '';
$data   = (isset($_GET['data'])) ? $_GET['data'] : '';

$sql = "SELECT * from relatorioDiario_shopping where
gerente_entrada='$gerente_entrada'
and gerente_saida = '$gerente_saida'
and createdAt like '%$data%'
";
$stm = $conexao->prepare($sql);
if($stm->execute()){
  $dados = $stm->fetchAll(PDO::FETCH_OBJ);
  $json = json_encode($dados);
  echo $json;
}
else{
  echo "Erro";
}