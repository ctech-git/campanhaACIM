<?php
// session_start();
$e_idSupervisor_despesa  = (isset($_GET['e_idSupervisor_despesa'])) ? $_GET['e_idSupervisor_despesa'] : '';
$e_idGerente_despesa  = (isset($_GET['e_idGerente_despesa'])) ? $_GET['e_idGerente_despesa'] : '';
$e_descricaoDespesa  = (isset($_GET['e_descricaoDespesa'])) ? $_GET['e_descricaoDespesa'] : '';
$e_valorDespesa  = (isset($_GET['e_valorDespesa'])) ? $_GET['e_valorDespesa'] : '';
$e_dataDespesa  = (isset($_GET['e_dataDespesa'])) ? $_GET['e_dataDespesa'] : '';
$e_idDespesa  = (isset($_GET['e_idDespesa'])) ? $_GET['e_idDespesa'] : '';

include_once("connectJS.php");

$sql = "UPDATE despesaSupervisor set
supervisor='$e_idSupervisor_despesa',
gerencia='$e_idGerente_despesa',
descricao='$e_descricaoDespesa',
valor='$e_valorDespesa',
dataDespesa='$e_dataDespesa'
WHERE id='$e_idDespesa'";
$stm = $conexao->prepare($sql);
if($stm->execute()){
  echo 'Sucesso';
}
else{
  echo "Erro";
}