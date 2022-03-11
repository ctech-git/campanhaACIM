<?php
// session_start();
include_once("../Control/connectJS.php");


$sql = "SELECT e.rastreador, e.gerente, e.cambista,e.id,e.observacao, s.nome, 
p.descricao, e.createdAt, e.retorno
from equipamentosCambistas as e, supervisor as s, produtos as p
where s.id = e.idSupervisor 
and e.idProduto = p.id
 ";
$stm = $conexao->prepare($sql);
if($stm->execute()){
  $dados = $stm->fetchAll(PDO::FETCH_OBJ);
  $json = json_encode($dados);
  echo $json;
}

else{
  echo $stm->errorInfo();
}