<?php
// session_start();
include_once("../Control/connectJS.php");

$data_inicial  = (isset($_GET['data_inicial'])) ? $_GET['data_inicial'] : '';
$data_final  = (isset($_GET['data_final'])) ? $_GET['data_final'] : '';

$sql = "SELECT * from novosCambistas where DATE_FORMAT(STR_TO_DATE(createdAt, '%Y-%m-%d'), '%Y-%m-%d') between '$data_inicial' and '$data_final'";
$stm = $conexao->prepare($sql);
if($stm->execute()){
  $dados = $stm->fetchAll(PDO::FETCH_OBJ);
  $json = json_encode($dados);
  echo $json;
}

else{
  echo $stm->errorInfo();
}