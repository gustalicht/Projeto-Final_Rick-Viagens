<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Hotelaria - Acomodações</title>
  <link rel="stylesheet" type="text/css" href="CSS_hotelaria.css">
  <link rel="icon" type="image/icon-x" href="image/aviao.png">
		<link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Open+Sans:wght@400;800&display=swap" rel="stylesheet">
</head>
<body>

  <header>
  <!-- Navegação/ menu -->
  <nav id="topo" class="container"> 
    <div>
      <div id= "logo">
<!-- na tag <a> vai algum link que direcione para o quem somos ou para a própria página inicial -->
        <a href="#"> <img src="image/logo-03.png" alt="logo"> </a>
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
            <a href="html_pagina_hotelaria.php">Hotelaria</a> 
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
<!--cabecalho de informaçoes--> 
<section id="conteudo">
  <div class="banner-title"></div>

  <div id="descriçao">
    <div class="sobrerick">
      <div class="page-title">
        <div class="title">
          <h2><span>Hotéis e Quartos</span></h2>
        </div>
      </div>
<div class="container">
  <div class="form-container">
    <form class="Busque-seu-quarto" action="processar_formulario.php" method="POST">
      <fieldset>
        <legend>Busque o seu Quarto:</legend>
        <div>
          <h3>Selecione seu Destino:</h3>
          <select name="Destino" required>
            <option value="">--Selecione--</option>
            <optgroup label="Europa(Mais procurados)">
              <option>França</option>
              <option>Inglaterra</option>
            </optgroup>
            <optgroup label="America do Sul">
              <option>Argentina</option>
              <option>Peru</option>
            </optgroup>
            <optgroup label="Outros">
              <option>Canada</option>
              <option>Australia</option>
              <option>Africa</option>
              <option>Estados Unidos</option>
            </optgroup>
          </select>
          <label for="nome" class="check">Data de ida:</label>
          <input class="form-input" type="date" id="nome" name="nome" required>

          <label for="email" class="check">Data de Volta:</label>
          <input class="form-input" type="date" id="email" name="email" required>

          <label for="telefone" class="check">Quantos Adultos:</label>
          <input class="form-input" type="number" id="telefone" name="telefone" required  max="10" min="1">

          <label for="endereco" class="check">Quantas crianças:</label>
          <input class="form-input" type="number" id="endereco" name="endereco" required max="10" min="0">

          <div class="buttons">
            <input class="submit-btn" type="submit" value="Pesquisar">
            <input class="reset-btn" type="reset" value="Limpar">
          </div>
        </div>
      </fieldset>
    </form>
  </div>
<!--quartos-->
  <section id="acomodacao">
    <div class="acomodacao">
      <h2>Quarto Standard</h2>
      <img src="https://cdn.pixabay.com/photo/2020/10/18/09/16/bedroom-5664221_1280.jpg" alt="Quarto Standard">
      <p>Diária: R$ 200</p>
      <button>Reservar</button>
    </div>

    <div class="acomodacao">
      <h2>Suíte Luxo</h2>
      <img src="https://cdn.pixabay.com/photo/2019/04/23/09/03/indoor-4148885_1280.jpg" alt="Suíte Luxo">
      <p>Diária: R$ 400</p>
      <button>Reservar</button>
    </div>

    <div class="acomodacao">
      <h2>Suíte Presidencial</h2>
      <img src="image/suite3.jpg" alt="Suíte Presidencial">
      <p>Diária: R$ 800</p>
     <button>Reservar</button>
    </div>
  </section>

      <!--Outros Destinos e fotos-->
    <section>
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
            <img src="image/inglaterra.jpg" alt="inglaterra">		
            <h4>Inglaterra</h4>
          </div>
        </div>
      
        <div class="col">
          <div class="card">
            <img src="image/argentina.jpg" alt="Argentina">
            <h4>Argentina</h4>
          </div>
        </div>
      
        <div class="col">
          <div class="card">
            <img src="image/peru.jpg" alt="Peru">
            <h4>Peru</h4>
          </div>
        </div>
      </div>

      <div id="galeria2">
        <div class="col">
          <div class="card">
            <img src="image/eua.jpg" alt="Estados_Unidos">
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
