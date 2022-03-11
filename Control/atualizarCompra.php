<?php
// session_start();
include_once("connectJS.php");

$idTransacao  = (isset($_GET['idTransacao'])) ? $_GET['idTransacao'] : '';
$qr_code  = (isset($_GET['qr_code'])) ? $_GET['qr_code'] : '';
$qr_code_url  = (isset($_GET['qr_code_url'])) ? $_GET['qr_code_url'] : '';
$status  = (isset($_GET['status'])) ? $_GET['status'] : '';
$idCompra  = (isset($_GET['idCompra'])) ? $_GET['idCompra'] : '';

$sql = "UPDATE campanhas set qrCode = '$qr_code', qr_code_url = '$qr_code_url', status = '$status', idTransacao = '$idTransacao' WHERE id= '$idCompra'";
$stm = $conexao->prepare($sql);
if($stm->execute()){
  echo "Sucesso";
}
else{
  echo "Erro";
}