<?php
namespace Models;

use Config\Modelo;


class TiposPagamento extends Modelo {

    public static function listarTiposPagamentos(){
        $tipospagamentos = TiposPagamento::select()->get();
        return $tipospagamentos;
    }
}