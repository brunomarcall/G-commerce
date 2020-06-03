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

    public function setUsuario($usuario){
        return $this->usuario;
    }

    public function getEmail(){
        return $this->email;
    }

    public function setEmail($email){
        return $this->email;
    }

    public function getSenha(){
        return $this->senha;
    }

    public function setSenha($senha){
        return $this->senha;
    }

}