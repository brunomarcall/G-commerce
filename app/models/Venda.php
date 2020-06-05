<?php
namespace Models;

use Config\Modelo;

class Venda extends Modelo {
    
    private $id, $valor, $dt_venda, $tipo_pagamento;


    public function __construct($id, $valor, $dt_venda, $tipo_pagamento) {
        $this->id = $id;
        $this->valor = $valor;
        $this->dt_venda = $dt_venda;
        $this->tipo_pagamento = $tipo_pagamento;
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getValor() {
        return $this->valor;
    }

    public function setValor($valor) {
        $this->valor = $valor;
    }

    public function getDtVenda() {
        return $this->dt_venda;
    }

    public function setDtVendad($dt_venda) {
        $this->dt_venda = $dt_venda;
    }

    public function getTipoPagamento() {
        return $this->tipo_pagamento;
    }

    public function setTipoPagamento($tipo_pagamento) {
        $this->tipo_pagamento = $tipo_pagamento;
    }
}
    
