<?php
// session_start();
$id  = (isset($_GET['id'])) ? $_GET['id'] : '';
$descricao  = (isset($_GET['descricao'])) ? $_GET['descricao'] : '';
$tipodocumento  = (isset($_GET['tipodocumento'])) ? $_GET['tipodocumento'] : '';
$numerodocumento  = (isset($_GET['numerodocumento'])) ? $_GET['numerodocumento'] : '';
$valor  = (isset($_GET['valor'])) ? $_GET['valor'] : '';
$categoria  = (isset($_GET['categoria'])) ? $_GET['categoria'] : '';
$datavencimento  = (isset($_GET['datavencimento'])) ? $_GET['datavencimento'] : '';
$empresa  = (isset($_GET['empresa'])) ? $_GET['empresa'] : '';
$dataadicionado  = (isset($_GET['dataadicionada'])) ? $_GET['dataadicionada'] : '';


include_once("connectJS.php");

$sql = "UPDATE movimentacao_financeira set descricao='$descricao',tipo_documento='$tipodocumento',
numero_documento='$numerodocumento',valor='$valor',categoria='$categoria',data_vencimento='$datavencimento', empresa='$empresa',
data_adicionado='$dataadicionado' WHERE id='$id'";
$stm = $conexao->prepare($sql);
if($stm->execute()){
  echo 'Sucesso';
}
else{
  echo "Erro";
}
