<?php
session_start();
//verificação para caso exista uma sessão, ele continua 
if((!isset($_SESSION['usuario']) == true) and (!isset($_SESSION['senha']) == true)){
   //se não existir volta para login
    unset($_SESSION['usuario']); //destroi qualquer dado
    unset($_SESSION['senha']); //destroi qualquer dado
    header('Location: login.php');

}
//caso exista, ele volta 
$logado = $_SESSION['usuario'];

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Sistema!</title>

    <style>
        body{
            background-color: #D9D9D9;
            text-align: center;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar bg-dark" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand me-5 danger" href="#">Bem vindo ao Sistema! <?php echo "$logado";?></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    </div>
    <div class="d-flex">
        <a href="sair.php" class="btn btn-danger me-3">Sair</a> 
    </div>
    </nav>
    <h1>Acessou o sistema</h1>
</body>
</html>