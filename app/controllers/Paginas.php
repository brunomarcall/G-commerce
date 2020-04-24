<?php

namespace Controllers;

use Controllers\Controlador;
use Models\Usuario;


class Paginas extends Controlador {

    public function __construct(){
        parent::__construct();
    }

    public function home(){  
        if($this->estaLogado()){
            $this->redirecionar("dashboard");
        }
        $this->views("home");
    }

    public function erro404(){
        $this->views("404");
    }

    public function esqueceuSenha(){
        $this->views("esqueceuSenha");
    }

    public function dashboard(){
        if($this->estaLogado()){
            $this->views("dashboard");
        }else{
            $this->redirecionar();
        }
    }

    public function graficos(){
        $this->views("graficos");
    }

    public function relatorios(){
        $this->views("relatorios");
    }

    public function cadastro(){
        $this->views("cadastro");
    }

}