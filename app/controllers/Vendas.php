<?php
namespace Controllers;

use Config\Modelo;
use Controllers\Controlador;
use Exception;
use Models\Venda;

Class Vendas extends Controlador {

    public function __construct(){
        parent::__construct();
    }

    public static function  verificarVenda($id) {
        $venda = Venda::select()->where('id', $id)->get() ??false;
    }

    public function inserirVenda() {
        $id = $_POST['id'] ?? null;
        $valor = $_POST['valor'] ?? null;
        $dtVenda = $_POST['dtVenda'] ?? null;
        $tpPagamento = $_POST['tpPagamento'] ?? null;

        if($id && $valor&& $dtVenda && $tpPagamento) {
            $venda =  Venda::verificarVenda($id);
            
            if(count($venda) <= 0) {
                $_SESSION['id_Venda'] = Venda::adicionarVenda($id, $valor, $dtVenda, $tpPagamento);
                $_SESSION['cadastrado'] = 'Venda Cadastrada com Sucesso';
            } else {
                unset($_SESSION['cadastrado']);
                $_SESSION['erro'] = 'Venda já Cadastrada';
                $this->redirecionar('listaVendas');
            }
        }
        $this->redirecionar();
    }

    public function adicionarVenda($id, $valor, $dtVenda, $tpPagamento) {
        try {
            Venda::insert([
                'id'=>$id,
                'valor'=>$valor,
                'dt_venda'=>$dtVenda,
                'tp_pagamento'=>$tpPagamento
            ])->execute();
        } catch(Exception $e) {
            echo 'Exceção capturada', $e->getMessage(), "\n";
        }
    }

    public function excluirVenda() {
        $id = $_GET['id'];
        Venda::delete()->where('id', $id)->execute();
        $this->redirecionar('listaVendas');
    }

    public function updateVenda() {
        $id = $_POST['id'];
        $valor = $_POST['valor'];
        $dtVenda = $_POST['dtVenda'];
        $tpPagamento = $_POST['tpPagamento'];

        Venda::update()->set('valor', $valor)
        ->where('id', $id)
        ->execute();
        
        Venda::update()->set('dt_venda', $dtVenda)
        ->where('id', $id)
        ->execute();

        Venda::update()->set('tp_pagamento', $tpPagamento)
        ->where('id', $id)
        ->execute();

        $this->redirecionar('listaVendas');

        
    }
}

