<?php
session_start();

if(isset($_POST['submit']) && !empty($_POST['usuario']) && !empty($_POST['senha'])){
    //acessar o sistema
    include_once('config.php');
    $usuario = mysqli_escape_string($conexao, $_POST['usuario']);
    $senha = mysqli_escape_string($conexao, $_POST['senha']);

    $sql = "SELECT * FROM usuarios WHERE usuario ='$usuario' and senha = '$senha'";
    $resultado = mysqli_query($conexao, $sql);
    
    if(mysqli_num_rows($resultado) < 1){
        //unset destruir qualquer variavel 
        unset($_SESSION['usuario']);
        unset($_SESSION['senha']);
        header('Location: login.php');
    }else{
        //variavel criada para session
        $_SESSION['usuario'] = $usuario;
        $_SESSION['senha'] = $senha;
        header('Location: sistema.php');
    }
}
else
{
    //Não acessa
    header('Location: login.php');
}
?>