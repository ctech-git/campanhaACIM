<?php
// session_start();
include_once("connectJS.php");

$tipo_movimentacao  = (isset($_GET['tipo_movimentacao'])) ? $_GET['tipo_movimentacao'] : '';
$descricao  = (isset($_GET['descricao'])) ? $_GET['descricao'] : '';
$tipo_documento  = (isset($_GET['tipo_documento'])) ? $_GET['tipo_documento'] : '';
$numero_documento  = (isset($_GET['numero_documento'])) ? $_GET['numero_documento'] : '';
$valor  = (isset($_GET['valor'])) ? $_GET['valor'] : '';
$categoria  = (isset($_GET['categoria'])) ? $_GET['categoria'] : '';
$data_vencimento  = (isset($_GET['data_vencimento'])) ? $_GET['data_vencimento'] : '';
$empresa  = (isset($_GET['empresa'])) ? $_GET['empresa'] : '';

$DT = new DateTime( 'now', new DateTimeZone( 'America/Belem') );
$data_adicionado= $DT->format( "d/m/Y H:i:s" );

$sql = "INSERT into movimentacao_financeira(tipo_movimentacao,descricao,tipo_documento,
  numero_documento,valor,categoria,data_vencimento,empresa,data_adicionado) values ('$tipo_movimentacao','$descricao','$tipo_documento',
    '$numero_documento','$valor','$categoria','$data_vencimento','$empresa','$data_adicionado')";
$stm = $conexao->prepare($sql);
if($stm->execute()){
  echo "Sucesso";
}
else{
  echo "Erro";
}
