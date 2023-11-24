<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rick Viagens & intercambios</title>
    <link rel="shortcut icon" href="form.png" type="image/x-icon">
    <link rel="stylesheet" href="trabalheconosco.css">
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
          <div id="logo">
            <!-- na tag <a> vai algum link que direcione para o quem somos ou para a própria página inicial -->
            <a href="trabalhe_conosco.php"> <img src="image/logo-03.png" alt="log Rick"> </a>
          </div>
          <div id="menu">
            <ul>
              <!-- colocar na tag <a> os links das outras páginas-->
              <li class="menu-item">
                <a href="index.php">Home</a>
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

    <section id="conteudo">
      <div class="banner-title"></div>

      <div id="descriçao">
        <div class="sobrerick">
          <div class="page-title">
            <div class="title">
              <h2><span>Sobre a RICK Viagens & Intercâmbios</span></h2>
            </div>
          </div>
          <p>A RICK Viagens & Intercâmbios é uma renomada empresa especializada em viagens e intercâmbios, oferecendo uma ampla gama de serviços e experiências para clientes que desejam explorar o mundo, aprimorar seus conhecimentos e mergulhar em diferentes culturas.</p>
          <p>Como uma agência de viagens de destaque, a RICK Viagens & Intercâmbios se destaca por sua abordagem personalizada e atendimento excepcional ao cliente. Seu principal objetivo é garantir que cada cliente tenha uma experiência única e inesquecível, atendendo às suas necessidades e preferências específicas.</p>
          <p>A empresa oferece uma variedade de pacotes de viagens, desde destinos turísticos populares até lugares exóticos e menos conhecidos. Seus itinerários são cuidadosamente planejados para oferecer uma combinação perfeita de aventura, cultura, lazer e descoberta. A RICK Viagens & Intercâmbios também oferece opções personalizadas para viagens em grupo, famílias, casais e viajantes individuais.</p>
          <p>Além disso, a empresa é especializada em intercâmbios educacionais, proporcionando aos estudantes a oportunidade de aprimorar seus conhecimentos em idiomas estrangeiros, adquirir experiência internacional e ampliar suas perspectivas culturais. Através de parcerias com escolas e instituições educacionais ao redor do mundo, a RICK Viagens & Intercâmbios oferece programas de intercâmbio abrangentes e suporte contínuo para garantir que cada estudante aproveite ao máximo sua experiência.</p>
          <p>A RICK Viagens & Intercâmbios orgulha-se de contar com uma equipe altamente capacitada e experiente, composta por consultores de viagens e educadores dedicados, que estão prontos para fornecer orientação e assistência em todas as etapas do processo. Sua rede de parceiros e fornecedores de serviços também é extensa e confiável, garantindo que os clientes desfrutem de acomodações confortáveis, transporte seguro e experiências enriquecedoras durante suas viagens e intercâmbios.</p>
          <p>Em resumo, a RICK Viagens & Intercâmbios é uma empresa líder no setor de viagens e intercâmbios, comprometida em oferecer experiências excepcionais e sob medida para seus clientes. Com sua dedicação ao atendimento ao cliente, programas educacionais de qualidade e ampla variedade de opções de viagens, a RICK Viagens & Intercâmbios é a escolha ideal para quem busca uma experiência de viagem enriquecedora e inesquecível.</p>
                   
        </div>
      </div>

      <div class="page-title">
        <div class="title">
          <h2><span>Trabalhe Conosco</span></h2>
        </div>
      </div>
      <div class="container">
        <div class="form-container">
          <form class="fale-conosco" action="processar_formulario.php" method="POST">
            <fieldset>
              <legend>Preencha os dados abaixo:</legend>
              <div>
                <label for="nome" class="check">Seu nome:</label>
                <input class="form-input" type="text" id="nome" name="nome" required>

                <label for="email" class="check">Seu e-mail:</label>
                <input class="form-input" type="email" id="email" name="email" required>

                <label for="telefone" class="check">Seu telefone:</label>
                <input class="form-input" type="tel" id="telefone" name="telefone" required>

                <label for="endereco" class="check">Seu endereço:</label>
                <input class="form-input" type="text" id="endereco" name="endereco" required>

                <label for="experiencia" class="check"
                  >Breve resumo da sua experiência:</label
                >
                <textarea id="experiencia" name="experiencia" required class="check text-area"></textarea>

                <label for="curriculo" class="check"
                  >Anexe seu currículo aqui:</label
                >
                <input type="file" id="curriculo" name="curriculo" required class="form-file check">

                <div class="buttons">
                  <input class="submit-btn" type="submit" value="Enviar">
                  <input class="reset-btn" type="reset" value="Limpar">
                </div>
              </div>
            </fieldset>
          </form>
        </div>
        <div class="lateral">
            <div class="title">
                <span>Fale conosco</span>
            </div>
          <div class="infos">
            <div class="intro">
                Entre em contato com nossos agentes de viagem especialistas:
            </div>
            <div class="info">
                <div>Maria Silva</div>
                <div>Telefone: (51) 9 9999 - 9999</div>
                <div>E-mail: maria@rickviagens.com</div>
            </div>
            <div class="info">
                <div>Sara Muller</div>
                <div>Telefone: (51) 9 9999 - 9999</div>
                <div>E-mail: sara@rickviagens.com</div>
            </div>
            <div class="info">
                <div>Rochelle</div>
                <div>Telefone: (51) 9 9999 - 9999</div>
                <div>E-mail: rochelle@rickviagens.com</div>
            </div>
            <div class="info">
              <div>Rick Viagens</div>
              <div>Telefone: (51) 9 9999 - 9999</div>
              <div>E-mail: contato@rickviagens.com</div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <footer id="rodape">
      <div class="social-media">
        <div class="icon">
          <a href="#"> <i class="fa-brands fa-instagram"></i> </a>      
        </div>
      </div>  

      <div class="social-media">
        <div class="icon">
          <a href="#"> <i class="fa-brands fa-whatsapp"></i>  </a>      
        </div>
      </div>  

      <div class="social-media">
        <div class="icon">
          <a href="#"> <i class="fa-brands fa-facebook"></i>  </a>      
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
