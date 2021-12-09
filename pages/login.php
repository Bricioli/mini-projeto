<?php 
session_start();
include('../config.php');
if (empty($_POST['usuario']) || empty($_POST['senha'])){
    header('Location: ../index.php');
    exit(); 
}

$usuario = mysqli_real_escape_string($conn, $_POST['usuario']);
$senha = mysqli_real_escape_string($conn, $_POST['senha']);

$query = "SELECT id_usuario, login_usuario FROM usuario WHERE login_usuario ='{$usuario}' AND senha_usuario = md5('{$senha}')";

$res = mysqli_query($conn, $query);

$row = mysqli_num_rows($res);

if ($row == 1){
    $_SESSION['usuario'] = $usuario;
    header('Location: painel.php');
    exit();     
}else{
    $_SESSION['nao_autenticado'] = true;
    header('Location: ../index.php');
    exit();
}