<?php
$user = 'root';
$server = 'localhost';
$database = 'db_testes';
$senha = '';

$conn = mysqli_connect($server,$user, $senha, $database);

if($conn){
	echo "Conexão feita com sucesso!";
}else{
	echo "Conexão falha!";
}

?>
