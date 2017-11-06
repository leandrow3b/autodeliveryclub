<?php

include_once('classes/Arquivo.php');

abstract class Conexao{
   
    protected $con;
    function __construct (){
        $this->conecta();           
    }

    public function conecta(){

       $arquivo = new Arquivo();
       $informacoes = $arquivo->arquivoXML();
       $usuario = $informacoes->usuario;
       $senha = $informacoes->senha;

       return $this->conexaoConfigurada($usuario, $senha);
    }
    
    public function conexaoConfigurada($usuario, $senha){

        try{
            
           $this->con = new PDO('mysql:host=localhost;dbname=app', $usuario, $senha);
           $this->con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
            
        }catch(PDOException $e){
           echo 'Erro: ' . $e->getMessage();
        }
    }
}