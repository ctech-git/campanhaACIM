<?php
// session_start();
include_once("connectJS.php");

$produto_movimentado  = (isset($_GET['produto_movimentado'])) ? $_GET['produto_movimentado'] : '';
$tipo_movimentacao  = (isset($_GET['tipo_movimentacao'])) ? $_GET['tipo_movimentacao'] : '';
$quantidade  = (isset($_GET['quantidade'])) ? $_GET['quantidade'] : '';
$observacao  = (isset($_GET['observacao'])) ? $_GET['observacao'] : '';
$usuario  = (isset($_GET['usuario'])) ? $_GET['usuario'] : '';
$retirada_quem  = (isset($_GET['retirada_quem'])) ? $_GET['retirada_quem'] : '';
$escritorio  = (isset($_GET['escritorio'])) ? $_GET['escritorio'] : '';

$DT = new DateTime( 'now', new DateTimeZone( 'America/Belem') );
$data_adicionado= $DT->format( "d/m/Y H:i:s" );
// $data_adicionado= $DT->format( "d/m/Y" );

$sql = "INSERT into estoque(id_produto,tipo_movimentacao,quantidade_produto,
  observacao,usuario, data_movimentado, escritorio, retirada_para) values ('$produto_movimentado','$tipo_movimentacao','$quantidade',
    '$observacao','$usuario', '$data_adicionado', '$escritorio','$retirada_quem')";
$stm = $conexao->prepare($sql);
if($stm->execute()){
  echo "Sucesso";
}
else{
  echo "Erro";
}
