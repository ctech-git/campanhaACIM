<?php
// session_start();
include_once("../Control/connectJS.php");


  $sql = "SELECT * from gerencia ";
$stm = $conexao->prepare($sql);
if($stm->execute()){
  $dados = $stm->fetchAll(PDO::FETCH_OBJ);
  $json = json_encode($dados);
  echo $json;
}

else{
  echo $stm->errorInfo();
}



$json = Array(
  "type"=> "QUESTION",
  "text"=> "Qual seu login de cambista?",
  "callback"=> {
  "endpoint"=> "https://yourdomain.com/api/question",
  "data": {
  "example": "Additional information"
  }
  }
  "attachments"=> []
  );
  