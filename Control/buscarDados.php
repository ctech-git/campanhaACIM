<?php
// session_start();
include_once("connectJS.php");

$id_loja  = (isset($_GET['id_loja'])) ? $_GET['id_loja'] : '';


$sql = "SELECT * from formularios where
id='$id_loja'
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