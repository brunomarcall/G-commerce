<?php
namespace Controllers;

use Models\Usuario;
class Paginas {

    public function home(){
        
        require PATH_VIEWS."home.php";
    }

    public function erro404(){
        require PATH_VIEWS."404.php";
    }

    public function esqueceuSenha(){
        require PATH_VIEWS."esqueceuSenha.php";
    }

    public function dashboard(){
        require PATH_VIEWS."dashboard.php";
    }

    public function graficos(){
        require PATH_VIEWS."graficos.php";
    }

    public function relatorios(){
        require PATH_VIEWS."relatorios.php";
    }

    public function cadastro(){
        require PATH_VIEWS."cadastro.php";
    }

    public function login(){
        $usuario = $_POST['email'] ?? null;
        $senha = $_POST['senha'] ?? null;

        if(!empty($usuario) && !empty($senha)){
            
            if($usuario == "login.teste@gmail.com" && $senha == "12345"){

                $objusuario = new Usuario($usuario, $senha);

                header("Location: " . BASE_URL . "dashboard");
            }else{
                header("Location: " . BASE_URL . "home");
            }
        }else if(empty($usuario) || empty($senha)){
            header("Location: " . BASE_URL);
        }
    }

    public function logout(){
        header("Location: " . BASE_URL);
    }
}