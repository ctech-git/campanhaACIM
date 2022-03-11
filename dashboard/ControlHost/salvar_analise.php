<?php
// session_start();
include_once("connectJS.php");

$analiseGerencia  = (isset($_GET['analiseGerencia'])) ? $_GET['analiseGerencia'] : '';
$analiseCambista  = (isset($_GET['analiseCambista'])) ? $_GET['analiseCambista'] : '';

$sql = "INSERT into analise_cambista(gerencia,cambista)
values ('$analiseGerencia',
'$analiseCambista'
)";
$stm = $conexao->prepare($sql);
if($stm->execute()){
  echo "Sucesso";
}
else{
  print_r($stm->errorInfo());
}