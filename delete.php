<?php

if(!empty($_GET['id'])){
    //verificar se o id existe ou n no banco
    include_once 'config.php';
    $id = $_GET['id'];
    $sqlSelect = "SELECT * FROM usuarios WHERE id='$id'";
    
    $result = mysqli_query($conexao, $sqlSelect);
    
    if(mysqli_num_rows($result) > 0){
        while($user_data = mysqli_fetch_assoc($result))
        {
            $sqlDelete = "DELETE FROM usuarios WHERE id='$id'";
            $resultDelete = mysqli_query($conexao, $sqlDelete);
        }
        
    }

}
header('Location: sistema.php');

?>