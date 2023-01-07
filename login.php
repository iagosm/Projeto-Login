<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css">
    <title>Tela de Login</title>
</head>
<body>
    
    <div class="tela-login">
        <h1> Login </h1>
        <form action="testLogin.php" method="POST">
        <label for="usuario">Usuário</label><br>
        <input type="text" name="usuario" ><br><br>
        <label for="senha">Senha</label><br>
        <input type="password" name="senha">
        <br><br>
        <button type="submit" name="submit"> Enviar </button>
        <a href="home.php">Voltar</a>
        </form>
    </div>
</body>
</html>