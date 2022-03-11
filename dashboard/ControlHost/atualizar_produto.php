<?php
// session_start();
$id  = (isset($_GET['id'])) ? $_GET['id'] : '';
$descricao  = (isset($_GET['descricao'])) ? $_GET['descricao'] : '';
$valor  = (isset($_GET['valor'])) ? $_GET['valor'] : '';
$categoria  = (isset($_GET['categoria'])) ? $_GET['categoria'] : '';
$data_entrega  = (isset($_GET['data_entrega'])) ? $_GET['data_entrega'] : '';
$fornecedor  = (isset($_GET['fornecedor'])) ? $_GET['fornecedor'] : '';
$data_adicionado  = (isset($_GET['data_adicionado'])) ? $_GET['data_adicionado'] : '';

include_once("connectJS.php");

$sql = "UPDATE produtos set descricao='$descricao',
valor='$valor',categoria='$categoria',data_entrega='$data_entrega',fornecedor='$fornecedor'  WHERE id='$id'";
$stm = $conexao->prepare($sql);
if($stm->execute()){
  echo 'Sucesso';
}
else{
  echo "Erro";
}
