<!DOCTYPE html>
<html>
<head>
	<link rel='stylesheet' href='style/style.css'>
</head>
<body>
	<fieldset>
		<form action='op_login.php' method='POST'>
			<label>Login</label>
			<input type='text' name='txtLogin' placeholder='Seu Login user'>
			<label>Senha</label>
			<input type='password' name='txtSenha' placeholder='Sua senha'>
			
			<input type='submit' value='Entrar' name='btnEntrar'>
		</form>
		<p>
		Ainda não tem cadastro ?<a href='cadastro.php'>Cadastre-se</a>
		</p>
	</fieldset>
</body>
</html>

