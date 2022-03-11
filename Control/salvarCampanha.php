<?php
// session_start();
include_once("connectJS.php");

$vendedor  = (isset($_GET['vendedor'])) ? $_GET['vendedor'] : '';
$campanha  = (isset($_GET['campanha'])) ? $_GET['campanha'] : '';
$nome = (isset($_GET['nome'])) ? $_GET['nome'] : '';
$telefone = (isset($_GET['telefone'])) ? $_GET['telefone'] : '';
$empresa = (isset($_GET['empresa'])) ? $_GET['empresa'] : '';
$cnpj = (isset($_GET['cnpj'])) ? $_GET['cnpj'] : '';
$associado = (isset($_GET['associado'])) ? $_GET['associado'] : '';
$kits = (isset($_GET['kits'])) ? $_GET['kits'] : '';
$camisaPP = (isset($_GET['camisaPP'])) ? $_GET['camisaPP'] : '';
$camisaP = (isset($_GET['camisaP'])) ? $_GET['camisaP'] : '';
$camisaM = (isset($_GET['camisaM'])) ? $_GET['camisaM'] : '';
$camisaG = (isset($_GET['camisaG'])) ? $_GET['camisaG'] : '';
$camisaGG = (isset($_GET['camisaGG'])) ? $_GET['camisaGG'] : '';
$valorTotal = (isset($_GET['valorTotal'])) ? $_GET['valorTotal'] : '';

$sql = "INSERT into campanhas
(
  nomeCampanha,  
  nome,
  telefone,
  empresa,
  cnpj,
  associado,
  kits,
  camisaPP,
  camisaP,
  camisaM,
  camisaG,
  camisaGG,
  vendedor,
  valorTotal
)
values (
 '$campanha',
 '$nome',
 '$telefone',
 '$empresa',
 '$cnpj',
 '$associado',
 '$kits',
 '$camisaPP',
 '$camisaP',
 '$camisaM',
 '$camisaG',
 '$camisaGG',
 '$vendedor',
 '$valorTotal'
)";
$stm = $conexao->prepare($sql);
if($stm->execute()){
  
  
  $id = $conexao->lastInsertId();
  echo json_encode(array('status'=>'success', 'id'=>$id, 'http_response_code' => http_response_code(200)));
}
else{
  echo "Erro";
  print_r($stm->errorInfo());
}