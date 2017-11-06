<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Auto Delivery Club</title>
    <!-- Bootstrap core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="../css/freelancer.min.css" rel="stylesheet">

  </head>
  <body>

  <!-- Contact Section -->
  <section id="contact">
      <div class="container">
        <h2 class="text-center">Cadastrar Usuário</h2>
        <hr class="star-primary">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
            <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
            <form name="sentMessage" id="contactForm" novalidate>
            <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>Nome</label>
              <input class="form-control" id="nome" type="email" placeholder="Nome" required data-validation-required-message="Informe nome.">
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
                  <label>Mensagem</label>
                  <textarea class="form-control" id="message" rows="5" placeholder="Mensagem" required data-validation-required-message="Informa a mensagem."></textarea>
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <br>
              <div id="success"></div>
              <div class="form-group">
                <button type="submit" style="background:#000" class="btn btn-success btn-lg" id="sendMessageButton">Incluir</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../js/jquery.maskedinput.min.js"></script>
    
    <script type="text/javascript">
     $(function(){
      $("#phone").mask("(99)99999-99");
     })
      
    </script>
  </body>
  </html>