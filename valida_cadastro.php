<?php
        include 'conexao.php';
        $nome = $_POST['txtNome'];
        $login = $_POST['txtLogin'];
        $email = $_POST['txtEmail'];
        $senha = $_POST['txtSenha'];

	$sql = "INSERT INTO usuarioTeste(id, nome, login, email, senha) VALUES (null, '$nome','$login','$email','$senha')";
	
	if(isset($_POST['Cadastrar'])){
		if(mysqli_query($conn, $sql)){
			echo "<script tyoe='txt/javascript'>alert('Cadastro feito com sucesso!')</script>";
			header('location:index.php');
		}else{
			echo "Erro ao cadastrar!";
		}
	}


?>
