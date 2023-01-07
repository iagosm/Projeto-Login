<?php 
session_start();
unset($_SESSION['usuario']); //destroi qualquer dado
unset($_SESSION['email']); //destroi qualquer dado
header("Location: login.php");



?>