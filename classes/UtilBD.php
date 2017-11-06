<?php
include_once('classes/Conexao.php');

abstract class UtilBD extends Conexao{

    function __construct(){
        parent::__construct();
    }
}