<?php
// session_start();
include_once("connectJS.php");

$supervisor  = (isset($_GET['supervisor'])) ? $_GET['supervisor'] : '';
$gerente  = (isset($_GET['gerente'])) ? $_GET['gerente'] : '';
$cambista  = (isset($_GET['cambista'])) ? $_GET['cambista'] : '';
$rastreador  = (isset($_GET['rastreador'])) ? $_GET['rastreador'] : '';
$texto  = (isset($_GET['texto'])) ? $_GET['texto'] : '';
$idProduto  = (isset($_GET['idProduto'])) ? $_GET['idProduto'] : '';

$sql = "INSERT into equipamentosCambistas 
(idSupervisor,gerente,cambista,rastreador, idProduto,observacao) values
 ('$supervisor','$gerente','$cambista','$rastreador', '$idProduto','$texto')";
$stm = $conexao->prepare($sql);

if($stm->execute()){

  $DT = new DateTime( 'now', new DateTimeZone( 'America/Belem') );
$data_adicionado= $DT->format( "d/m/Y H:i:s" );  

$observacao = "Saída de equipamento para ".$cambista." pelo gerente ".$gerente;

$sql = "INSERT into estoque 
(id_produto,quantidade_produto,tipo_movimentacao,retirada_para, data_movimentado,observacao) values
 ('$idProduto',
 '1',
 'saida',
 '$supervisor',
 '$data_adicionado',
 '$observacao'
 )";
$stm = $conexao->prepare($sql);

if($stm->execute()){
  echo "Sucesso";
}

}

else{
  echo "Erro";
}