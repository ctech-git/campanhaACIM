<?php
// session_start();
include_once("connectJS.php");

$descricao  = (isset($_GET['descricao'])) ? $_GET['descricao'] : '';
$valor  = (isset($_GET['valor'])) ? $_GET['valor'] : '';
$categoria  = (isset($_GET['categoria'])) ? $_GET['categoria'] : '';
$tempo_entrega  = (isset($_GET['tempo_entrega'])) ? $_GET['tempo_entrega'] : '';
$fornecedor  = (isset($_GET['fornecedor'])) ? $_GET['fornecedor'] : '';
$escritorio  = (isset($_GET['escritorio'])) ? $_GET['escritorio'] : '';

$DT = new DateTime( 'now', new DateTimeZone( 'America/Belem') );
// $data_adicionado= $DT->format( "d/m/Y H:i:s" );
$data_adicionado= $DT->format( "d/m/Y" );

$sql = "INSERT into produtos(descricao,valor,categoria,
  escritorio, data_adicionado) values ('$descricao','','$categoria',
    '$escritorio', '$data_adicionado')";
$stm = $conexao->prepare($sql);

if($stm->execute()){

  $id = $conexao->lastInsertId();

  $sql = "INSERT into estoque(id_produto,tipo_movimentacao,quantidade_produto,
    observacao,usuario, data_movimentado, escritorio) values ($id,'entrada','$valor', '','', '$data_adicionado','$escritorio')";
  $stm = $conexao->prepare($sql);

  if($stm->execute()){
  echo "Sucesso";
  }
  else{
     print_r($stm->errorInfo());

  }
}
else{
  echo "Erro";
}
