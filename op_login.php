<?php
session_start();
include 'conexao.php';
$login = $_POST['txtLogin'];
$senha = $_POST['txtSenha'];

$sqlSelect = "SELECT * FROM usuarioTeste where login='$login' and senha='$senha';";
$resultado = mysqli_query($conn, $sqlSelect);

if(mysqli_num_rows($resultado)>0){
	$_SESSION['logou'] = 1;
}else{
	$_SESSION['logou'] = 0;
}

if($_SESSION['logou'] == 1){
	header('location:restrito.php');
}else{
	header('location:index.php?Erro no login');
}

?>
