<?php
// session_start();
include_once("connectJS.php");

$respostas  = (isset($_GET['respostas'])) ? $_GET['respostas'] : '';
$idEmpresa  = (isset($_GET['idEmpresa'])) ? $_GET['idEmpresa'] : '';
$nome  = (isset($_GET['nome'])) ? $_GET['nome'] : '';
$telefone  = (isset($_GET['telefone'])) ? $_GET['telefone'] : '';
$dataNascimento  = (isset($_GET['dataNascimento'])) ? $_GET['dataNascimento'] : '';
$observacoes  = (isset($_GET['observacoes'])) ? $_GET['observacoes'] : '';
$satisfacaoTotal  = (isset($_GET['satisfacaoTotal'])) ? $_GET['satisfacaoTotal'] : '';

$sql = "INSERT into respostas
(
  idEmpresa,  
  respostas,
  nome,
  telefone,
  dataNascimento,
  observacoes,
  satisfacaoTotal
)
values (
 '$idEmpresa',
 '$respostas',
 '$nome',
 '$telefone',
 '$dataNascimento',
 '$observacoes',
 '$satisfacaoTotal'
)";
$stm = $conexao->prepare($sql);
if($stm->execute()){
  echo "Sucesso";
}
else{
  echo "Erro";
}