<?php
//fetch.php
include('connect.php');

$request = mysqli_real_escape_string($conexao, $_POST["query"]);

$query = "
 SELECT * FROM venda_cartola WHERE nome_completo  LIKE '%".$request."%' GROUP BY nome_completo
";

$result = mysqli_query($conexao, $query);

$data = array();

if(mysqli_num_rows($result) > 0)
{
 while($row = mysqli_fetch_assoc($result))
 {
  $data[] = $row["nome_completo"];
 }
 echo json_encode($data);
}

?>
