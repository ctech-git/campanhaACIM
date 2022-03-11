<?php
// session_start();
include_once("connectJS.php");

$id  = (isset($_GET['id'])) ? $_GET['id'] : '';
$data_inicial  = (isset($_GET['data_inicial'])) ? $_GET['data_inicial'] : '';
$data_final  = (isset($_GET['data_final'])) ? $_GET['data_final'] : '';


$sql = "SELECT * from tabela_colaboradores 
where gerente='$id' and
(DATE_FORMAT(STR_TO_DATE(data_inicial, '%Y-%m-%d'), '%Y-%m-%d') between '$data_inicial' and '$data_final' or
DATE_FORMAT(STR_TO_DATE(data_final, '%Y-%m-%d'), '%Y-%m-%d') between '$data_inicial' and '$data_final')
group by id";
$stm = $conexao->prepare($sql);
if($stm->execute()){
  $dados = $stm->fetchAll(PDO::FETCH_OBJ);
  $json = json_encode($dados);
  echo $json;}
else{
  echo "Erro";
}