<?php
// session_start();
include_once("connectJS.php");

$nome_completo  = (isset($_GET['nome_completo'])) ? $_GET['nome_completo'] : '';
$telefone  = (isset($_GET['telefone'])) ? $_GET['telefone'] : '';
$data_nascimento  = (isset($_GET['data_nascimento'])) ? $_GET['data_nascimento'] : '';
$servicos  = (isset($_GET['servicos'])) ? $_GET['servicos'] : '';
$valor  = (isset($_GET['valor'])) ? $_GET['valor'] : '';
$horario  = (isset($_GET['horario'])) ? $_GET['horario'] : '';
$profissional  = (isset($_GET['profissional'])) ? $_GET['profissional'] : '';
$funcionario  = (isset($_GET['funcionario'])) ? $_GET['funcionario'] : '';

$DT = new DateTime( 'now', new DateTimeZone( 'America/Belem') );
$data_adicionado= $DT->format( "d/m/Y H:i:s" );

$sql = "INSERT into venda_cartola(nome_completo,telefone,data_nascimento,servicos,funcionario,
  valor,horario,profissional,data_adicionado) values ('$nome_completo','$telefone','$data_nascimento','$servicos','$funcionario',
    '$valor','$horario','$profissional','$data_adicionado')";
$stm = $conexao->prepare($sql);
if($stm->execute()){
  echo "Sucesso";
}
else{
  echo "Erro";  echo $stm->errorInfo();

}
