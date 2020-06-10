<?php
namespace Models;

use Config\Modelo;


class Produto extends Modelo {
    
    private $id;
    private $nome;
    private $categoria;
    private $quantidade;

    public function __construct($id,$nome, $categoria, $quantidade){
        $this->id = $id;
        $this->categoria = $categoria;
        $this->nome = $nome;
        $this->quantidade = $quantidade;
    } 

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getNome() {
        return $this->id;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getCategoria($categoria) {
        return $this->categoria;
    }

    public function setCategoria($categoria) {
        $this->categoria = $categoria;
    }

    public function getQuantidade($quantidade) {
        return $this->quantidade;
    }

    public function setQuantidade($quantidade) {
        $this->quantidade = $quantidade;
    }    
}