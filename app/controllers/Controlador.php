<?php
namespace Controllers;

use Controllers\Autenticacao;

class Controlador{

    private $dadosView = array();

    public function __construct(){}

    public function addDadosSessao($nomeVariavel, $valor){
        $_SESSION[$nomeVariavel] = $valor;
    }

    public function views($view){

        $dadosView = $this->dadosView;

        require PATH_VIEWS."$view.php";
    }

    public function addDadosPagina($nomeVariavel, $valor){
        $this->dadosView[$nomeVariavel] = $valor;
    }

    public function redirecionar($url=""){
        header("Location:" . BASE_URL . $url); 
        exit;
        // unset($_SESSION['erro']);
    }

    public function estaLogado(){
        return Autenticacao::checarLogin();
    }

    public function logar($usuario){
        if(!$this->estaLogado()){
            $_SESSION['token'] = Autenticacao::verificarLogin($usuario['email'], $usuario['senha']);
        }
    }
    
    public function deslogar(){
            unset($_SESSION['token']);
            session_destroy();
        }
}

?>