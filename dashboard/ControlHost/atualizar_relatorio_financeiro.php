<?php
// session_start();
$id  = (isset($_GET['id'])) ? $_GET['id'] : '';
$tipo_movimentacao  = (isset($_GET['tipo_movimentacao'])) ? $_GET['tipo_movimentacao'] : '';
$descricao  = (isset($_GET['descricao'])) ? $_GET['descricao'] : '';
$valor_movimentado  = (isset($_GET['valor_movimentado'])) ? $_GET['valor_movimentado'] : '';
$data_movimentacao  = (isset($_GET['data_movimentacao'])) ? $_GET['data_movimentacao'] : '';
$conta_bancaria  = (isset($_GET['conta_bancaria'])) ? $_GET['conta_bancaria'] : '';
$observacao  = (isset($_GET['observacao'])) ? $_GET['observacao'] : '';
$centro_de_custo  = (isset($_GET['centro_de_custo'])) ? $_GET['centro_de_custo'] : '';
$gerencia  = (isset($_GET['gerencia'])) ? $_GET['gerencia'] : '';

include_once("connectJS.php");

$sql = "UPDATE financeiro set
tipo_movimentacao='$tipo_movimentacao',
descricao='$descricao',
valor_movimentado='$valor_movimentado',
data_movimentacao='$data_movimentacao',
conta_bancaria='$conta_bancaria',
centro_de_custo='$centro_de_custo',
gerencia='$gerencia',
observacao='$observacao'
WHERE id='$id'";
$stm = $conexao->prepare($sql);
if($stm->execute()){
  echo 'Sucesso';
}
else{
  echo "Erro";
}
