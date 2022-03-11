<?php
// session_start();


include_once("connectJS.php");

$sql = "SELECT * from movimentacao_financeira";
$stm = $conexao->prepare($sql);
if($stm->execute()){
  echo 'Sucesso';
}
else{
  echo "Erro";
}
