<?php
//fetch.php
include('connect.php');
$request = mysqli_real_escape_string($conexao, $_POST["query"]);

$query = "
 SELECT * FROM despesas WHERE gerencia LIKE '%".$request."%' group by gerencia
";

$result = mysqli_query($conexao, $query);

$data = array();

if(mysqli_num_rows($result) > 0)
{
 while($row = mysqli_fetch_assoc($result))
 {
  $data[] = $row["gerencia"];
 }
 echo json_encode($data);
}

?>
