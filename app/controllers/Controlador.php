<?php
namespace Controllers;

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
        return isset($_SESSION['usuario']) ? true : false;
    }

    public function logar($usuario){
        if(!$this->estaLogado()){
            session_regenerate_id();
            $_SESSION['usuario'] = serialize($usuario);
        }
    }
    
    public function deslogar(){
            unset($_SESSION['usuario']);
            session_destroy();
        }
}

?>