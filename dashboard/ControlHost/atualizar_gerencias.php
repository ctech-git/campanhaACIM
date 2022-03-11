<?php
// session_start();
$id  = (isset($_GET['id'])) ? $_GET['id'] : '';
$sigla  = (isset($_GET['sigla'])) ? $_GET['sigla'] : '';


include_once("connectJS.php");

$sql = "UPDATE cambistas set estado='$sigla' WHERE id='$id'";
$stm = $conexao->prepare($sql);
if($stm->execute()){
  echo 'Sucesso';
}
else{
  echo "Erro";
}
