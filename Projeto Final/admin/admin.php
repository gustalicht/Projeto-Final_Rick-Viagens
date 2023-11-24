<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Bem vindo ao admin</title>
	<link rel="stylesheet" type="text/css" href="admin.css">
</head>
<body>
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

	<?php } else {
		echo "<p>Você não tem acesso a esta página.</p>";
	} ?>
</body>
</html>