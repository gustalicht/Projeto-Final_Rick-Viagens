<!DOCTYPE html>
<html>
<head>
	<title>Layout em PHP</title>
</head>
<body>
	<?php require "layout/topo.php"; ?>
	
	<?php include "layout/menu.php"; ?>

	<h1>Fale conosco</h1>
	<p>Conteúdo da página inicial</p>
	
	<?php require_once "layout/lateral.php"; ?>

	<?php include_once "layout/rodape.php"; ?>
	
	<div class="menu-rodape">
		<?php include "layout/menu.php"; ?>
	</div>
	
	<?php require_once "layout/lateral.php"; ?>
	
</body>
</html>