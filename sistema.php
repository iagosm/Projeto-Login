<?php
session_start();
include_once 'config.php';
//verificação para caso exista uma sessão, ele continua 
if((!isset($_SESSION['usuario']) == true) and (!isset($_SESSION['senha']) == true)){
   //se não existir volta para login
    unset($_SESSION['usuario']); //destroi qualquer dado
    unset($_SESSION['senha']); //destroi qualquer dado
    header('Location: login.php');

}
//caso exista, ele volta 
$logado = $_SESSION['usuario'];
//listagem
$sql = "SELECT * FROM usuarios ORDER BY id DESC";
$result = mysqli_query($conexao, $sql);


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

        .table-bg{
          background-color: rgba(0, 0, 0, 0.8);
          border-radius: 8px 8px 0 0;
        }
        .boxSearch{
          display: flex;
          justify-content: center;
          gap: 0.1%;
          margin-top: 15px;
        } 
        h1{
          margin-top: 30px;
        }
    
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar bg-dark" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand me-5 danger" href="#">Bem vindo ao Sistema! <?php echo "$logado";?></a>
    <button    class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    </div>
    <div class="d-flex">
        <a href="sair.php" class="btn btn-danger me-3">Sair</a> 
    </div>
    </nav>
    <h1>Acessou o sistema</h1>
        <div class="boxSearch" >
          <input type="search" class="form-control w-25" placeholder="Pesquisar" id="pesquisar" nome="pesquisar">
          <button class="btn btn-dark" onclick="searchData()">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
          <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
          </svg>
        </button>
        </div>
        <div class="m-5">
        <table class="table table-bg text-white" id="table">
  <thead>
    <tr>
      <th scope="col">#id</th>
      <th scope="col">Nome</th>
      <th scope="col">Usuário</th>
      <th scope="col">Senha</th>
      <th scope="col">E-mail</th>
      <th scope="col">Telefone</th>
      <th scope="col">Genero</th>
      <th scope="col">Data Nascimento</th>
      <th scope="col">Cidade</th>
      <th scope="col">Estado</th>
      <th scope="col">Endereço</th>
      <th scope="col">...</th>
    </tr>
  </thead>
  <tbody>
        <?php
        while($user_data = mysqli_fetch_assoc($result)){
            echo "<tr>";
            echo "<td>".$user_data['id']."</td>";
            echo "<td>".$user_data['nome']."</td>";
            echo "<td>".$user_data['usuario']."</td>";
            echo "<td>".$user_data['senha']."</td>";
            echo "<td>".$user_data['email']."</td>";
            echo "<td>".$user_data['telefone']."</td>";
            echo "<td>".$user_data['sexo']."</td>";
            echo "<td>".$user_data['data_nasc']."</td>";
            echo "<td>".$user_data['cidade']."</td>";
            echo "<td>".$user_data['estado']."</td>";
            echo "<td>".$user_data['endereco']."</td>";
            echo "<td> 
            <a href='edit.php?id=$user_data[id]' class='btn btn-light '>
            <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor class='bi bi-pencil-fill' viewBox='0 0 16 16'>
            <path d='M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z'/>
            </svg>
            </a>
            <a href='delete.php?id=$user_data[id]' class='btn btn-light' >
            <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash3-fill' viewBox='0 0 16 16'>
            <path d='M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z'/>
            </svg></a>
             </td>";
            echo "</tr>";
        }
        
        ?>
  </tbody>
</table>
        </div>

</body>
<script>
  var search = document.getElementById('pesquisar');
  //implementar para quando apertarmos enter ele buscar
  search.addEventListener("keydown", function(event){
    if(event.key == "Enter"){
      searchData();
    }
  })
  
  function searchData(){
    window.location = 'sistema.php?search='+search.value;
  }
</script>
</html>