<?php
namespace Controllers;

use Controllers\Controlador;
use Models\Usuario;

class Autenticacao extends Controlador{
    
    public function __construct(){
        parent::__construct();
    }

    public function login(){
        if($this->estaLogado()){
            $this->redirecionar("dashboard");
        }
        $usuario = $_POST['email'] ?? null;
        $senha = $_POST['senha'] ?? null;

        if(!empty($usuario) && !empty($senha)){
            
            if($usuario == "login.teste@gmail.com" && $senha == "12345"){

                $objusuario = new Usuario($usuario, $senha);
                $this->logar($objusuario);
                $this->redirecionar("dashboard");
            }
        }
        $this->addDadosSessao("erro", "Login Incorreto");
        $this->redirecionar();
        
    }

    public function logout(){
        $this->deslogar();
        $this->redirecionar();
    }
    
}