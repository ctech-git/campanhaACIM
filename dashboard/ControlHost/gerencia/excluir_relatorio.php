<?php
// session_start();
$id  = (isset($_GET['id'])) ? $_GET['id'] : '';

include_once("../connectJS.php");

$sql = "DELETE from relatorio_cambistas WHERE  id='$id'";
$stm = $conexao->prepare($sql);
if($stm->execute()){

  $sql = "DELETE from tabela_colaboradores WHERE  idRelatorio='$id'";
  $stm = $conexao->prepare($sql);
  if($stm->execute()){
    echo 'Sucesso';
  }
  else{
    echo "Erro 2";
  }
}
else{
  echo "Erro";
}