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

    <!-- Custom styles for this template -->
    <link href="../css/freelancer.min.css" rel="stylesheet">
  <style type="text/css">
    ::-webkit-input-placeholder {
       text-align: center;
    }

    :-moz-placeholder { /* Firefox 18- */
        text-align: center;  
    }

    ::-moz-placeholder {  /* Firefox 19+ */
        text-align: center;  
    }

    :-ms-input-placeholder {  
        text-align: center; 
    }
  </style>
  </head>
  <body>
    <!-- Contact Section -->
    <section id="contact">
      <div class="container">
        <h2 class="text-center"> <img src="../img/adc_login.png"></h2>
        <h4 class="text-center">Auto Delivery Club</h4>
        <hr class="star-primary">
        <div class="row">
          <div class="col-lg-6 mx-auto">
          <form name="sentMessage" id="contactForm" action="../index.php?codigo=<?=$_GET['codigo']?>" novalidate method="get">
              <div class="control-group">
                <div class="form-group floating-label-form-group controls">
                  <label>Código de Acesso</label>
                  <input class="form-control" name="codigo" id="name" type="text" placeholder="Informe seu código">
                  <p class="help-block text-danger"></p>
                </div>                                
              </div>              
              <br>
              <div class="text-center">
                <button type="submit" style="background:#000" class="btn btn-success btn-lg" id="sendMessageButton">Consultar</button>
              </div>
            </div>
            </form>
          </div>
        </div>      
    </section>   
    </body>
    </html>