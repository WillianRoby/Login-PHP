<?php
session_start();
include('verificacaoLogin.php');
?>

<h2>O usuário "<?php echo $_SESSION['nome'];?>" entrou com sucesso!</h2>
<h2><a href="logout.php">Sair</a></h2>

<style>
    h2{
        text-align: center;
    }
</style>