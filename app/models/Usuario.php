<?php
namespace Models;

class Usuario{
    
    private $usuario;
    private $senha;

    public function __construct($usuario, $senha){
        $this->usuario = $usuario;
        $this->senha = $senha;
    }
    
    public function getUsuario(){
        return $this->usuario;
    }

    
}