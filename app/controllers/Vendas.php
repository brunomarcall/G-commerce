<?php
namespace Controllers;

use Config\Modelo;
use Controllers\Controlador;
use Exception;
use Models\Venda;
use Models\Produto;

Class Vendas extends Controlador {

    public function __construct(){
        parent::__construct();
    }

    public static function  verificarVenda($id) {
        $venda = Venda::select()->where('id', $id)->get() ??false;
    }

    public function inserirVenda() {
        $idProduto = $_POST['produto'] ?? null;
        $valor = $_POST['valorTotal'] ?? null;
        $dtVenda = $_POST['dtVenda'] ?? null;
        $tpPagamento = $_POST['tpPagamento'] ?? null;
        $quantidade = $_POST['quantidade'] ?? null;

        if($idProduto && $valor&& $dtVenda && $tpPagamento && $quantidade) {
            Vendas::adicionarVenda($idProduto, $valor, $dtVenda, $tpPagamento, $quantidade);
            $_SESSION['cadastrado'] = 'Venda Cadastrada com Sucesso';
        }
        $this->redirecionar('listaVendas');
    }

    public static function adicionarVenda($idProduto, $valor, $dtVenda, $tpPagamento, $quantidade) {
        try {
            Venda::insert([
                'id_produto'=>$idProduto,
                'valor'=>str_replace('.', ',', $valor),
                'dt_venda'=>$dtVenda,
                'id_tipopagamento'=>$tpPagamento
            ])->execute();
            $qtdBanco = Produto::select(['quantidade'])->where('id', $idProduto)->get();
            $qtd = intval($qtdBanco) - intval($quantidade);
            Produto::update(['quantidade'=>$qtd])
                ->where('id', $idProduto)
            ->execute();
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
        $id = $_POST['id'] ?? null;
        $idProduto = $_POST['produto'] ?? null;
        $valor = $_POST['valorTotal'] ?? null;
        $dtVenda = $_POST['dtVenda'] ?? null;
        $tpPagamento = $_POST['tpPagamento'] ?? null;
        $quantidade = $_POST['quantidade'] ?? null;

        Venda::update()
            ->set('valor', $valor)
            ->set('dt_venda', $dtVenda)
            ->set('id_tipopagamento', $tpPagamento)
        ->where('id', $id)
        ->execute();

        $this->redirecionar('listaVendas');

        
    }
}

