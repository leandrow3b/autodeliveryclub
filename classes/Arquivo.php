<?php
class Arquivo{
    
    private $url = "util/conexao.xml";

    public function arquivoXML(){
        
       return  simplexml_load_file($this->url);       
    }
}