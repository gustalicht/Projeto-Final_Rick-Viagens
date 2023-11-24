<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Rick Viagens & intercambios</title>
		<link rel="stylesheet" type="text/css" href="destinos.css">
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
								<a href="index.php">Home</a> 
							</li>
							<li class="menu-item submenu"> 
								<a href="html_pagina_hotelaria.php">Hotelaria</a> 
								<!--<ul class="dropdown">
									<li> <a href="#"></a>Promo 01</li>
									<li> <a href="#"></a>Promo 02</li>
									<li> <a href="#"></a>Promo 03</li>
								</ul>-->
							</li>
							<!--<li class="menu-item submenu"> 
								<a href="">Hotelaria</a> 
								<ul class="dropdown">
									<li> <a href="#"></a>Hotelaria</li>
									<li> <a href="#"></a>Alguel de Carro</li>
								</ul>
							</li> -->
							<li class="menu-item"> 
								<a href="destinos.php">Destinos</a> 
							</li>
							<!-- <li class="menu-item submenu"> 
								<a href="#">Contato</a> 
								<ul class="dropdown">
									<li> <a href="#"></a>Fale Conosco</li>
									<li> <a href="#"></a>Trabalhe Conosco</li> 
								</ul>
							</li> -->
							<li class="menu-item submenu"> 
								<a href="trabalhe_conosco.php">Rick Viagens</a> 
								<!-- COLOCAR QUEM SOMOS E TRABALHA CONOSOCO AQUI -->
								<!---<ul class="dropdown">
									<li> <a href="#"></a>Quem Somos</li>
									<li> <a href="#"></a>Trabalhe conosco</li>
								</ul>-->
							</li>
						</ul>
					</div>
					
				</div>
			</nav>
			
		</header>

		<section>
			<div class="conteudo container">

				<div class="banner">
					<h2>Destinos</h2>
					<!--<video width="320" height="240" controls> <source src="videos/fundo-video_1920x1080.mp4" type="video/mp4"></video>-->
				</div>
<!--
				<form>
					<div id="formulario">
						<div class="form-qtd destinos">
							<label class="lugar"></label>
							<select class="options" name="destinos">
								<option value="">-Selecione-</option>
								<option>França</option>
								<option>Inglaterra</option>
								<option>Argentina</option>
								<option>Peru</option>
								<option>EUA</option>
								<option>Canada</option>
								<option>Australia</option>
								<option>Africa</option>
							</select>
						</div>
						<div class="form-qtd">					
							<i></i>
							<input type="date" name="" placeholder="Data de ida:">
						</div>
						<div class="form-qtd">					
							<i></i>
							<input type="date" name="" placeholder="Data de volta:">
						</div>
						<div class="form-qtd">					
							<i></i>
							<input type="number" max="10" min="0" step="1" name="" placeholder="Quantos adultos?">
						</div>
						<div class="form-qtd">					
							<i></i>
							<input type="number" max="10" min="0" step="1" name="" placeholder="Quantas crianças?">
						</div>
						<div class="form-qtd">					
							<i></i>
							<input type="number" max="10" min="0" step="1" name="" placeholder="Quantos quartos?">
						</div>
						<div class="botao">
							<button>Solite seu orçamento!</button>
						</div>
					</div>

				</form>
-->
				<div id="galeria">
					<div class="col">
						<div class="card">
							<a href="frança.php">
								<img src="image/franca.jpg" alt="França">
								<h4>França</h4>
							</a>
						</div>
					</div>
				
					<div class="col">
						<div class="card">
							<a href="inglaterra.php">
								<img src="image/inglaterra.jpg" alt="Ingalteraa">		
								<h4>Inglaterra</h4>
							</a>
						</div>
					</div>
				
					<div class="col">
						<div class="card">
							<a href="argentina.php">
								<img src="image/argentina.jpg" alt="Argentina">
								<h4>Argentina</h4>
							</a>
						</div>
					</div>
				
					<div class="col">
						<div class="card">
							<a href="peru.php">
								<img src="image/peru.jpg" alt="Peru">
								<h4>Peru</h4>
							</a>
						</div>
					</div>
				</div>

				<div id="galeria2">
					<div class="col">
						<div class="card">
							<img src="image/eua.jpg" alt="EUA">
							<h4>EUA</h4>
						</div>
					</div>

					<div class="col">
						<div class="card">
							<img src="image/canada.jpg" alt="Canada">		
							<h4>Canada</h4>
						</div>
					</div>

					<div class="col">
						<div class="card">
							<img src="image/australia.jpg" alt="Australia">
							<h4>Australia</h4>
						</div>
					</div>

					<div class="col">
						<div class="card">
							<img src="image/africa.jpg" alt="Africa">
							<h4>Africa</h4>
						</div>
					</div>
				</div>
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