<?php
// session_start();
$id  = (isset($_GET['id'])) ? $_GET['id'] : '';
$usuario  = (isset($_GET['usuario'])) ? $_GET['usuario'] : '';
$status  = (isset($_GET['status'])) ? $_GET['status'] : '';
$observacoes  = (isset($_GET['observacoes'])) ? $_GET['observacoes'] : '';

include_once("connectJS.php");

$sql = "UPDATE novosCambistas set
status='$status',
conclusao='$observacoes',
usuarioAnalise='$usuario'
WHERE id='$id'";
$stm = $conexao->prepare($sql);
if($stm->execute()){
  echo 'Sucesso';
}
else{
  echo "Erro";
}