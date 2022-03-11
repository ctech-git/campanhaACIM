<?php
// session_start();
$id  = (isset($_GET['id'])) ? $_GET['id'] : '';
$latitude  = (isset($_GET['latitude'])) ? $_GET['latitude'] : '';
$longitude  = (isset($_GET['longitude'])) ? $_GET['longitude'] : '';


include_once("connectJS.php");

$sql = "UPDATE cambistas set latitude='$latitude', longitude='$longitude' WHERE id='$id'";
$stm = $conexao->prepare($sql);
if($stm->execute()){
  echo 'Sucesso';
}
else{
  echo "Erro";
}
