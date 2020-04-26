<?php
namespace Models;

use Config\Modelo;

class Usuario extends Modelo {
    
    private $usuario;
    private $email;
    private $senha;

    public function __construct($usuario, $senha, $email){
        $this->usuario = $usuario;
        $this->email = $email;
        $this->senha = $senha;
    }
    
    public function getUsuario(){
        return $this->usuario;
    }

    
}