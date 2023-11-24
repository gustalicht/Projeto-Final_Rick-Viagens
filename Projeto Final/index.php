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
			
		<header>	
			<nav id="topo" class="container"> 
				<div>
					<div id= "logo">
		<!-- na tag <a> vai algum link que direcione para o quem somos ou para a própria página inicial -->
						<a href="trabalhe_conosco.php"> <img src="image/logo-03.png" alt="logo Rick"> </a>
					</div>
					<div id="menu">
						<ul>
							
							<!-- colocar na tag <a> os links das outras páginas-->
							<li class="menu-item"> 
								<a href="admin/login.php">Página Administrativa</a> 
							</li>
							<li class="menu-item submenu"> 
								<a href="html_pagina_hotelaria.php">Hotelaria</a> 								
							</li>
							
							<li class="menu-item"> 
								<a href="destinos.php">Destinos</a> 
							</li>
							
							<li class="menu-item submenu"> 
								<a href="trabalhe_conosco.php">Rick Viagens</a> 								
							</li>
						</ul>
					</div>
					
				</div>
			</nav>
			
		</header>

		<section class="container">			
			<div class="banner">
				
			</div>

			<div class="titulo">
					<h3>Melhores Destinos</h3>
			</div>

			<div id="galeria">		
				<div class="conteudo">
					<div>
						<a href="franca.php"> <img src="image/franca.jpg" alt="França"> </a>
					</div>
					<h4>França</h4>					
				</div>

				<div class="conteudo">
					<div>
						<a href="inglaterra.php"> <img src="image/inglaterra.jpg" alt="Inglaterra"> </a>
					</div>		
					<h4>Inglaterra</h4>
				</div>

				<div class="conteudo">
					<div>
						<a href="argentina.php"> <img src="image/argentina.jpg" alt="Argetina"> </a>
					</div>
					<h4>Argetina</h4>
				</div>
			</div>

			<div class="titulo">
					<h3>Principais Descontos</h3>
			</div>
			


		</section>

		<footer id="rodape">
			<div class="social-media">
				<div class="icon">
					<a href="#"> <i class="fa-brands fa-instagram"></i>	</a>			
				</div>
			</div>	

			<div class="social-media">
				<div class="icon">
					<a href="#"> <i class="fa-brands fa-whatsapp"></i>	</a>			
				</div>
			</div>	

			<div class="social-media">
				<div class="icon">
					<a href="#"> <i class="fa-brands fa-facebook"></i>	</a>			
				</div>
			</div>	
			<div>
				<h5>Todos os direitos reservados.</h5>
			</div>
		</footer>

		<div class="whats">
			<p class="wha">
				<a href="#"> 
					<i class="fa-brands fa-whatsapp"></i>
					Fale Conosco!
				</a>
			</p>
		</div>

	</body>
</html>