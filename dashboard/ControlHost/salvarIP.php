<?php
// session_start();
include_once("connectJS.php");

$colaborador  = (isset($_GET['colaborador'])) ? $_GET['colaborador'] : '';
$ip  = (isset($_GET['ip'])) ? $_GET['ip'] : '';


$DT = new DateTime( 'now', new DateTimeZone( 'America/Belem') );
$data_adicionado= $DT->format( "d/m/Y H:i:s" );

$sql = "INSERT into cambistaIP(login,ip)
values (
 '$colaborador',
 '$ip'
)";
$stm = $conexao->prepare($sql);
if($stm->execute()){
  echo "Sucesso";
}
else{
  echo "Erro";
}