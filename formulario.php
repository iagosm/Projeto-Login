<?php 
//Conexão
include_once 'config.php';

if(isset($_POST['submit'])):
    // print_r('Nome: '.$_POST['nome']);
    // echo "<br>";
    // print_r('Usuario: '.$_POST['usuario']);
    // echo "<br>";
    // print_r('E-mail: '.$_POST['email']);
    // echo "<br>";
    // print_r($_POST['telefone']);
    // echo "<br>";
    // print_r($_POST['genero']);
    // echo "<br>";
    // print_r($_POST['data_nascimento']);
    // echo "<br>";
    // print_r($_POST['cidade']);
    // echo "<br>";
    // print_r($_POST['estado']);
    // echo "<br>";
    // print_r($_POST['endereco']);
    $nome = $_POST['nome'];
    $usuario =  $_POST['usuario'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $sexo = $_POST['genero'];
    $data_nasc = $_POST['data_nascimento'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $endereco = $_POST['endereco'];

    $resultado = mysqli_query($conexao, "INSERT INTO usuarios(nome,usuario,email,telefone,sexo,data_nasc,cidade,estado,endereco) VALUES ('$nome', '$usuario', '$email', '$telefone', '$sexo', '$data_nasc', '$cidade', '$estado', '$endereco')");
endif;


?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/form.css">
    <title>Cadastro</title>
</head>
<body>
    <div class="box">
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
            <fieldset> 
                <legend> <b>Formulário de Cadastro</b> </legend><br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome Completo</label>
                </div><br><br>

                <div class="inputBox">
                    <input type="text" name="usuario" id="usuario" class="inputUser" required>
                    <label for="usuario" class="labelInput">Usuário</label>
                </div><br><br>

                <div class="inputBox">
                    <input type="email" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput">E-mail</label>
                </div><br><br>

                <div class="inputBox">
                    <input type="tel" name="telefone" class="inputUser" required>
                    <label for="telefone" class="labelInput">Telefone</label>
                </div><br>

                <p>Sexo:</p>                
                <input type="radio" name="genero" value="feminino" required>
                <label for="feminino">Feminino</label>

                <input type="radio" name="genero" value="masculino" required>
                <label for="masculino">Masculino</label>

                <input type="radio" name="genero" value="outro" required>
                <label for="outro">Outro</label>
                <br><br>
                
                    <label for="data_nascimento"><b>Data de Nascimento:</b> </label>
                    <input type="date" name="data_nascimento" id="data_nascimento" >
                
                <br><br>

                <div class="inputBox">
                    <input type="text" name="cidade" id="cidade" class="inputUser" required>
                    <label for="cidade" class="labelInput">Cidade</label>
                </div><br><br>

                <div class="inputBox">
                    <input type="text" name="estado" id="estado" class="inputUser" required>
                    <label for="estado" class="labelInput">Estado</label>
                </div><br><br>

                <div class="inputBox">
                    <input type="text" name="endereco" id="endereco" class="inputUser" required>
                    <label for="endereco" class="labelInput">Endereço</label>
                </div><br><br>

                
                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>
</body>
</html>