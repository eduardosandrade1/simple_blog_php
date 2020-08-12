<!DOCTYPE html>
<html>
<head>
	<link rel='stylesheet' href='style/style.css'>
</head>
<body>
	<fieldset>
		<legend><h1>Cadastre-se</h1></legend>
		<form action='valida_cadastro.php' method='POST'>
			<input type='text' name='txtNome' placeholder='Seu nome' required>
			<input type='text' name='txtEmail' placeholder='Seu email' required>
			<input type='text' name='txtLogin' placeholder='Seu nome de usuario' required>
			<input type='text' name='txtSenha' placeholder='Sua senha' required>
			
			<input type='submit' name='Cadastrar' value='Cadastrar'>

		</form>
	</fieldset>
</body>
</html>
