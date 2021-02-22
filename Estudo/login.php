<?php
session_start();
include ('conexao.php');

if(empty ($_POST ['usuario']) || empty($_POST ['senha'])){
    header('Location: index.php');
    $_SESSION['erro'] = true;
    exit();
    
}
$usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

$query = "Select nome from usuario where usuario = '{$usuario}' and senha = md5('{$senha}')";

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);

if($row == 1){
    $usuarioBD = mysqli_fetch_assoc($result);
    $_SESSION['nome'] = $usuarioBD['nome'];
    header('Location: logou.php');
    exit();
}else{
    $_SESSION['erro'] = true;
    header('Location: index.php');
    exit();
}
?>