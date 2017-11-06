<?php

  $codigo = $_GET['codigo'];
  echo $codigo;
  

?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Auto Delivery Club</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/freelancer.min.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Auto Delivery Club</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#portfolio">Fidelidade</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">Quem Somos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Fale Conosco</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Header -->
    <header class="masthead">
      <div class="container">
        <img class="img-fluid" src="img/adc.png" alt="">
        <div class="intro-text">
          <span class="name">Auto Delivery Club</span>
          <hr class="star-light">
          <span class="skills">Sua lavagem automotiva ecológica</span>
        </div>
      </div>
    </header>

    <!-- Portfolio Grid Section -->
    <section id="portfolio">
      <div class="container">
        <h2 class="text-center">Fidelidade</h2>
        <hr class="star-primary">
        <div class="row text-center">
            <div class="col-sm-1 portfolio-item">           
                <img class="img-fluid" src="img/carro.png" alt="">                       
            </div> 
            <div class="col-sm-1 portfolio-item">           
             Data da lavagem: 31/10/2017
            </div>  

            <div class="col-sm-1 portfolio-item">           
                <img class="img-fluid" src="img/carro.png" alt="">                         
            </div>   
            <div class="col-sm-1 portfolio-item">           
              Data da lavagem: 31/10/2017
            </div>  
            <div class="col-sm-1 portfolio-item">           
                <img class="img-fluid" src="img/carro.png" alt="">                         
            </div> 
            <div class="col-sm-1 portfolio-item">           
              Data da lavagem: 31/10/2017
            </div>    
            <div class="col-sm-1 portfolio-item">           
                <img class="img-fluid" src="img/carro.png" alt="">                        
            </div>   
            <div class="col-sm-1 portfolio-item">           
              Data da lavagem: 31/10/2017
            </div>  
            <div class="col-sm-1 portfolio-item">           
                <img class="img-fluid" src="img/carro.png" alt="">                         
            </div>    
            <div class="col-sm-1 portfolio-item">           
              Data da lavagem: 31/10/2017
            </div>  
                   
          </div>                 
        </div>
      </div>
    </section>

    <!-- About Section -->
    <section class="success" id="about">
      <div class="container">
        <h2 class="text-center" style="color:#000">Sobre</h2>
        <hr class="star-light">
        <div class="row">
          <div class="col-lg-4 ml-auto">
            <p style="color:#000; text-align:justify"><span style="color:#f7f711">......</span>Estamos disponibilizando no mercado o nosso serviço de lavagem automotiva delivery, nossa empresa se chama Auto Delivery Club. Nossos produtos têm tecnologia de alta qualidade que nos proporciona oferecer uma proteção/brilho incomparáveis no seu carro. Nosso processo de estética segue os requisitos ideais para lavagem automotiva, sem arranhar a pintura do seu carro, coisa muito comum em lavagens convencionais, onde não se tem um treinamento técnico.</p>
          </div>
          <div class="col-lg-4 mr-auto">
            <p style="color:#000;  text-align:justify"><span style="color:#f7f711">......</span>Porquê cuidar da pintura do seu carro?
Sabemos que 85% dos automóveis comprados no Brasil são pagos com a venda do seu carro usado, sabemos também que existe um processo de avaliação da situação do seu carro usado. Segundo pesquisas, o valor médio de descontos referente a pinturas danificadas chega a R$ 2500 a 3000 reais. Pense bem! Um carro bem cuidado no futuro vai valer mais na avaliação.</p>
          </div>
         
        </div>
      </div>
    </section>

    <!-- Contact Section -->
    <section id="contact">
      <div class="container">
        <h2 class="text-center">Fale conosco</h2>
        <hr class="star-primary">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
            <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
            <form name="sentMessage" id="contactForm" novalidate>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls">
                  <label>Nome</label>
                  <input class="form-control" id="name" type="text" placeholder="Nome" required data-validation-required-message="Informe seu nome.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls">
                  <label>Email</label>
                  <input class="form-control" id="email" type="email" placeholder="Email" required data-validation-required-message="Informe seu e-mail.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls">
                  <label>Telefone</label>
                  <input class="form-control" id="phone" type="tel" placeholder="Telefone" required data-validation-required-message="Informe o número do seu telefone.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls">
                  <label>Mensagem</label>
                  <textarea class="form-control" id="message" rows="5" placeholder="Mensagem" required data-validation-required-message="Informa a mensagem."></textarea>
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <br>
              <div id="success"></div>
              <div class="form-group">
                <button type="submit" style="background:#000" class="btn btn-success btn-lg" id="sendMessageButton">Enviar</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer class="text-center">
      <div class="footer-above">
        <div class="container">
          <div class="row">          
            <div class="footer-col col-md-4">
              <h3>Encontre-nos na web</h3>
              <ul class="list-inline">
                <li class="list-inline-item">
                  <a class="btn-social btn-outline" href="#">
                    <i class="fa fa-fw fa-facebook"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a class="btn-social btn-outline" href="#">
                    <i class="fa fa-instagram" aria-hidden="true"></i>
                  </a>
                </li>
                
              </ul>
            </div>          
          </div>
        </div>
      </div>
      <div class="footer-below">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              Copyright &copy; Auto Delivery Club 2017
            </div>
          </div>
        </div>
      </div>
    </footer>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top d-lg-none">
      <a class="btn btn-primary js-scroll-trigger" href="#page-top">
        <i class="fa fa-chevron-up"></i>
      </a>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/freelancer.min.js"></script>

  </body>

</html>
