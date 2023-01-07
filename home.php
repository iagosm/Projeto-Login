<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Início</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-color: #D9D9D9;
            text-align: center;
            color: #3B0F94;
        }

        .box{
            
            position: absolute;
            top: 40%;
            left: 50%;
            transform: translate(-50%, -40%);
            border: 2px solid #3B0F94;
            border-left:2px solid #3B0F94;
            background-color: rgba(0, 0, 0, 0.8);
            padding: 35px;
            box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;
            border-radius: 8px;
         }
        a{
            text-decoration: none;
            font-size: 20px;
            font-weight: bold;
            padding: 20px;
            color: white;
            border: 2px solid #3B0F94;
            border-radius: 8px;
            transition: 2s;
        }
        a:hover{
            background-color: #5E17EB;
        }
    </style>


</head>
<body>
    <h1> Acesse a nossa plataforma!</h1>
    <div class="box">
        <a href="login.php">Login</a>
        <a href="formulario.php">Cadastre-se</a>
    </div>
</body>
</html>