<?php

include_once('classes/UtilBD.php');

class Usuario extends UtilBD{
    
    
    public function incluir(){
        
        $stmt = $this->con->prepare('INSERT INTO usuario (usuario, senha, id_cliente) 
        VALUES (:usuario, :senha, :id_cliente)');
            $stmt->execute(array(
            ':usuario' => 'Leandro',
            ':senha' => '123',
            ':id_cliente' => 1
            ));

        $stmt->rowCount(); 
        
        
    }
}