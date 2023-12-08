<?php
    require_once 'functions.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Rick Viagens & intercambios</title>
		<link rel="stylesheet" type="text/css" href="index.css">
		<link rel="icon" type="image/icon-x" href="image/aviao.png">
		<link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Open+Sans:wght@400;800&display=swap" rel="stylesheet">
	</head>
	<body>
			
	<?php require_once "menu.php"; ?>

		<section class="container">			
			<div class="banner">
				
			</div>

			<div class="titulo">
					<h3>Melhores Destinos</h3>
			</div>

			<div id="galeria">		
			<?php
			$countries = getCountries($connect);
			foreach ($countries as $country) {
				echo '<div class="conteudo">';
				echo '<div>';
				echo '<a href="' . $country['link'] . '"> <img src="' . $country['image'] . '" alt="' . $country['name'] . '"> </a>';
				echo '</div>';
				echo '<h4>' . $country['name'] . '</h4>';
				echo '</div>';
			}

    ?>
			</div>

			<div class="titulo">
					<h3>Principais Descontos</h3>
			</div>
			


		</section>

		<?php require_once "rodape.php"; ?>

	</body>
</html>