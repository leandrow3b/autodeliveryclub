<?php

include('../phpqrcode/qrlib.php');
$codigo =  rand();
QRcode::png("http://www.autodelivery.com.br/app/index/codigo?=$codigo", "qrcode.png", QR_ECLEVEL_L, 4);
?>
<!DOCTYPE html>
<html lang="en">

   <head>
            <title>Cartão do Cliente</title>
            <style type="text/css">
                .corpo{
                    text-align:center;
                    border:1px solid #212223;
                    height:500px;
                    font-family: Arial;
                    margin: 0 auto;
                    width: 50%;                    
                }
                h3{
                    font-size:12px;
                }
                .logo{
                    width:300px;
                }
                hr{
                    border-top: 1px dashed #4f3a2d;
                    border-bottom: 1px solid #4f3a2d;
                    color: #fff;
                    background-color: #fff;
                    height: 4px;
                }
                .nome{
                    font-size:16px;
                    font-weight:bold;
                }
                .site{
                    font-family:arial;
                    font-size:12px;

                }
            </style>
    </head>
    <body>
       
       <div class="corpo"> 
            <h2>Cartão Fidelidade</h2>    
            <hr/>      
                <h3>Cliente: Leandro Costa</h3>
                <div>           
                    <img src="img/adc.png" class="logo">                                                              
                </div> 
                <div class="nome">
                    Auto Delivery Club
                </div>                
                <div>                     
                    <img src="qrcode.png">                       
                </div>             
                <div class="site">
                    Acesse: www.autodelivery.com.br       
                </div>
                <div>           
                    <?php echo $codigo; ?>
                </div>                                 
        
       </div>
    </body>
</html>