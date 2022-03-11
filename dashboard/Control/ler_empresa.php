<?php
// session_start();
include_once("../../Control/connectJS.php");


$id  = (isset($_GET['id'])) ? $_GET['id'] : '';

$sql = "SELECT * from formularios where id='$id'";
$stm = $conexao->prepare($sql);
if($stm->execute()){
  $dados = $stm->fetchAll(PDO::FETCH_OBJ);
  $json = json_encode($dados);
  echo $json;}
else{
  echo "Erro";
}