<?php
namespace Models;

use Config\Modelo;


class Categoria extends Modelo {
    public static function listarCategorias(){
        return array_values(Categoria::select()->get());
    }
}