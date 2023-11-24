<?php require_once 'functions.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Acesso ao Painel admin</title>
	<link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>	
<?php require_once "menu.php"; ?>
<?php login($connect); ?>
	<form method="post">
		
		<h3 class= "descriçao">Acesso ao admin do site:</h3>
		<input type="email" name="email" placeholder="Seu email" required>
		<input type="password" name="senha" placeholder="Sua Senha" required>

		<button name="login" >login</button>
	</form>
	<?php getUsers($connect); ?>
	
</body>
</html>