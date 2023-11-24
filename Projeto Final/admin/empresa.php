<!DOCTYPE html>
<html>
<head>
	<title>Layout em PHP</title>
</head>
<body>
	<?php require "layout/topo.php"; ?>
	
	<?php include "layout/menu.php"; ?>

	<h1>Quem Somos</h1>
	<p>Conteúdo da página inicial</p>	
	

	<?php include_once "layout/rodape.php"; ?>
	
	<div class="menu-rodape">
		<?php include "layout/menu.php"; ?>
	</div>
	
	
	
</body>
</html>