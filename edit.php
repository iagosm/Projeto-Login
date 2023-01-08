<?php 
//Conexão
include_once 'config.php';

if(!empty($_GET['id'])){
    
    $id = $_GET['id'];
    $sqlSelect = "SELECT * FROM usuarios WHERE id='$id'";
    
    $result = mysqli_query($conexao, $sqlSelect);
    
    if(mysqli_num_rows($result) > 0){
        while($user_data = mysqli_fetch_assoc($result)){
            $nome = $user_data['nome'];
            $usuario =  $user_data['usuario'];
            $senha = $user_data['senha'];
            $email = $user_data['email'];
            $telefone = $user_data['telefone'];
            $sexo = $user_data['sexo'];
            $data_nasc = $user_data['data_nasc'];
            $cidade = $user_data['cidade'];
            $estado = $user_data['estado'];
            $endereco = $user_data['endereco'];
        }
        
    }
    else{
        header('Location: sistema.php');
    }

    
}
else
{
    header('Location: sistema.php');
}
    
    

    
   


?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/form.css">
    <title>Cadastro</title>
    <style>
        #update{
            width: 100%;
            padding: 15px;
            cursor: pointer;
            border-radius: 8px;
            background-color: #3B0F94;
            color: white;
            font-size: 18px;
            font-weight: bold;
            border: 1px solid #D9D9D9;
            transition: 2s;
            margin-bottom: 20px;
            
        }
        a{
            font-size: 20px;
            text-decoration: none;
            font-weight: bold;
            color: white;
        }

    </style>
</head>
<body>
    
    <div class="box">
        <form action="save.php" method="POST">
            <fieldset> 
                <legend> <b>Formulário de Cadastro</b> </legend><br>
                <div class="inputBox">
                    <input type="hidden" value="<?php echo $id; ?>">
                    <input type="text" name="nome" id="nome" class="inputUser" value="<?php echo $nome; ?>" required>
                    <label for="nome" class="labelInput">Nome Completo</label>
                </div><br><br>

                <div class="inputBox">
                    <input type="text" name="usuario" id="usuario" class="inputUser" value="<?php echo $usuario; ?>" required>
                    <label for="usuario" class="labelInput">Usuário</label>
                </div><br><br>

                <div class="inputBox">
                    <input type="text" name="senha" id="senha" class="inputUser" value="<?php echo $senha; ?>" required>
                    <label for="senha" class="labelInput">Senha</label>
                </div><br><br>

                <div class="inputBox">
                    <input type="email" name="email" id="email" class="inputUser" value="<?php echo $email; ?>" required>
                    <label for="email" class="labelInput">E-mail</label>
                </div><br><br>

                <div class="inputBox">
                    <input type="tel" name="telefone" class="inputUser" value="<?php echo $telefone; ?>" required>
                    <label for="telefone" class="labelInput">Telefone</label>
                </div><br>

                <p>Sexo:</p>                
                <input type="radio" name="genero" value="feminino" <?php echo($sexo == 'feminino') ? 'checked' : '' ?> required>
                <label for="feminino">Feminino</label>

                <input type="radio" name="genero" value="masculino" <?php echo($sexo == 'masculino') ? 'checked' : ''?> required>
                <label for="masculino">Masculino</label>

                <input type="radio" name="genero" value="masculino" <?php echo($sexo == 'outro') ? 'checked' : ''?> required>
                <label for="masculino">Outro</label>

                <br><br>
                
                    <label for="data_nascimento"><b>Data de Nascimento:</b> </label>
                    <input type="date" name="data_nascimento" id="data_nascimento" value="<?php echo $data_nasc; ?>">
                
                <br><br>

                <div class="inputBox">
                    <input type="text" name="cidade" id="cidade" class="inputUser" value="<?php echo $cidade; ?>" required>
                    <label for="cidade" class="labelInput">Cidade</label>
                </div><br><br>

                <div class="inputBox">
                    <input type="text" name="estado" id="estado" class="inputUser" value="<?php echo $estado; ?>" required>
                    <label for="estado" class="labelInput">Estado</label>
                </div><br><br>

                <div class="inputBox">
                    <input type="text" name="endereco" id="endereco" class="inputUser" value="<?php echo $endereco; ?>" required>
                    <label for="endereco" class="labelInput">Endereço</label>
                </div><br><br>

                <input type="hidden" name="id" value="<?php echo $id ?>">
                <input type="submit" name="update" id="update">
                <a href="sistema.php">Voltar</a>
            </fieldset>
        </form>
    </div>
</body>
</html>