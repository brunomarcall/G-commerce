<?php
namespace Models;

use Config\Modelo;

class Produto extends Modelo {
    
    private $id;
    private $categoria;
    private $nome;
    private $quantidade;

    public function __construct($id,$categoria, $quantidade, $nome){
        $this->id = $id;
        $this->categoria = $categoria;
        $this->nome = $nome;
        $this->quantidade = $quantidade;
    } 
}