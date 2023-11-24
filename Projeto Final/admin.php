<?php session_start(); 
	require_once 'functions.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Portal ADM</title>
	<link rel="stylesheet" type="text/css" href="admin.css">
</head>
<body>
<?php require_once "menu.php"; ?>
	<?php if ( isset($_SESSION['ativa']) ) { ?>		
	<div class="admin">
		<h1>
			Bem vindo ao painel administrativo do site!
		</h1>
		<p>
			Olá <?php echo $_SESSION['email']; ?>, aqui você tem acesso as ferramentas para administrar seu sistema.
		</p>
		<a class="sair" href="deslogar.php">Sair</a>
	</div>

	<?php insertUser($connect); ?>

	<form method="post">
		<input type="text" name="nome" placeholder="Seu nome" required>
		<input type="email" name="email" placeholder="Seu E-mail" required>
		<input type="password" name="senha" placeholder="Sua senha" required>
		<input type="password" name="repete-senha" placeholder="Repita sua senha" required>

		<input type="submit" name="cadastrar">		
	</form>

	<?php } else {
		echo "<p>Você não tem acesso a esta página.</p>";
	} ?>
</body>
</html>