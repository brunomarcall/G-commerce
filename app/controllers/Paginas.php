<?php

namespace Controllers;

use Controllers\Controlador;
use Models\Usuario;
use Models\Categoria;


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

    public function cadastrarProduto(){
        if($this->estaLogado()){
            $categorias = Categoria::select('nome')->get();
            $this->addDadosPagina('categorias', array_values($categorias));
            $this->views("cadastrarProduto");
        }else{
            $this->redirecionar();
        }
    }

    public function listarprodutos() {
        if($this->estaLogado()) {
            $this->views("listar");
        } else {
            $this->redirecionar();
        }
    }

    public function editarProduto() {
        if($this->estaLogado()) {
            $this->views("editarProduto");
        } else {
            $this->redirecionar("listar");
        }
    }

    public function listaVendas() {
        if($this->estaLogado()) {
            $this->views('listaVendas');
        } else {
            $this->redirecionar();
        }
        
    }

    public function cadastroVenda() {
        if($this->estaLogado()) {
            $this->views('cadastroVenda');
        } else {
            $this->redirecionar();
        }
    }



}