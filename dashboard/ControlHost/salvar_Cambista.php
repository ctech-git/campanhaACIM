<?php
// session_start();
include_once("connectJS.php");

$nome_completo  = (isset($_GET['nome_completo'])) ? $_GET['nome_completo'] : '';
$telefone  = (isset($_GET['telefone'])) ? $_GET['telefone'] : '';
$data_nascimento  = (isset($_GET['data_nascimento'])) ? $_GET['data_nascimento'] : '';
$gerencia  = (isset($_GET['gerencia'])) ? $_GET['gerencia'] : '';
$estado  = (isset($_GET['estado'])) ? $_GET['estado'] : '';
$cidades  = (isset($_GET['cidades'])) ? $_GET['cidades'] : '';
$cpf  = (isset($_GET['cpf'])) ? $_GET['cpf'] : '';
$gerente_cambista  = (isset($_GET['gerente_cambista'])) ? $_GET['gerente_cambista'] : '';

$latitude  = (isset($_GET['latitude'])) ? $_GET['latitude'] : '';
$longitude  = (isset($_GET['longitude'])) ? $_GET['longitude'] : '';

$DT = new DateTime( 'now', new DateTimeZone( 'America/Belem') );
$data_adicionado= $DT->format( "d/m/Y H:i:s" );

$sql = "INSERT into cambistas(nome_completo,telefone,data_nascimento,cpf,gerente_cambista,
  gerencia,estado,cidade,data_cadastro,latitude,longitude) values ('$nome_completo','$telefone','$data_nascimento','$cpf', '$gerente_cambista',
    '$gerencia','$estado','$cidades','$data_adicionado', '$latitude','$longitude')";
$stm = $conexao->prepare($sql);
if($stm->execute()){
  echo "Sucesso";
}
else{
  echo "Erro";
}
