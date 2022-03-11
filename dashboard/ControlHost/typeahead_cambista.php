<?php
//fetch.php
include('connect.php');
$request = mysqli_real_escape_string($conexao, $_POST["query"]);
$gerencia = mysqli_real_escape_string($conexao, $_POST["gerencia"]);

$query = "
 SELECT * FROM despesas WHERE cambista LIKE '%".$request."%' and gerencia='$gerencia' group by cambista
";

$result = mysqli_query($conexao, $query);

$data = array();

if(mysqli_num_rows($result) > 0)
{
 while($row = mysqli_fetch_assoc($result))
 {
  $data[] = $row["cambista"];
 }
 echo json_encode($data);
}

?>
