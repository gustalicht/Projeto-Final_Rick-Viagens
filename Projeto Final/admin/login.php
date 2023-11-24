<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Acesso ao Painel admin</title>
	<link rel="stylesheet" type="text/css" href="admin.css">
</head>
<body>	
	<form class="login" action="logar.php" method="post">
		
		<h3>Acesso ao admin do site:</h3>
		<input type="email" name="email" placeholder="Seu email" required>
		<input type="text" name="senha" placeholder="Sua Senha" required>

		<button name="login">login</button>
	</form>

	<div class="bt-acessar">
		<a href="logar.php">
			Acessar Página administrativa
		</a>
	</div>
</body>
</html>