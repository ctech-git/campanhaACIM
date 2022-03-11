<?php
// session_start();
$id  = (isset($_GET['id'])) ? $_GET['id'] : '';

include_once("connectJS.php");

$sql = "DELETE from financeiro WHERE id='$id'";
$stm = $conexao->prepare($sql);
if($stm->execute()){
  echo 'Sucesso';
}
else{
  echo "Erro";
}
