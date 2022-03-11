<?php
//fetch.php
include('connect.php');
$request = mysqli_real_escape_string($conexao, $_POST["query"]);

$query = "
 SELECT * FROM movimentacao_financeira WHERE descricao LIKE '%".$request."%' group by descricao
";

$result = mysqli_query($conexao, $query);

$data = array();

if(mysqli_num_rows($result) > 0)
{
 while($row = mysqli_fetch_assoc($result))
 {
  $data[] = $row["descricao"];
 }
 echo json_encode($data);
}

?>
