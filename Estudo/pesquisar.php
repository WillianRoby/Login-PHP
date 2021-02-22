<?php
session_start();
include("conexao.php");

$pesquisar = $_POST['pesquisar'];
$result_user = "select * FROM usuario where usuario like '%$pesquisar%' LIMIT 5";
$result = mysqli_query($conexao, $result_user);

while($rows_user = mysqli_fetch_array($result)){
  echo $rows_user['usuario']."<br>";
}
?>
