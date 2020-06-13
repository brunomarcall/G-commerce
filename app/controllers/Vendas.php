<?php

namespace Controllers;

use Config\Modelo;
use Controllers\Controlador;
use Exception;
use Models\Venda;
use Models\Produto;

class Vendas extends Controlador
{

    public function __construct()
    {
        parent::__construct();
    }

    public static function  verificarVenda($id)
    {
        $venda = Venda::select()->where('id', $id)->get() ?? false;
    }

    public function inserirVenda()
    {
        $idProduto = $_POST['produto'] ?? null;
        $valor = $_POST['valorTotal'] ?? null;
        $dtVenda = $_POST['dtVenda'] ?? null;
        $tpPagamento = $_POST['tpPagamento'] ?? null;
        $quantidade = $_POST['quantidade'] ?? null;

        if ($idProduto && $valor && $dtVenda && $tpPagamento && $quantidade) {
            Vendas::adicionarVenda($idProduto, $valor, $dtVenda, $tpPagamento, $quantidade);
            $_SESSION['cadastrado'] = 'Venda Cadastrada com Sucesso';
        }
        $this->redirecionar('listaVendas');
    }

    public static function adicionarVenda($idProduto, $valor, $dtVenda, $tpPagamento, $quantidade)
    {
        try {
            Venda::insert([
                'id_produto' => $idProduto,
                'valor' => str_replace('.', ',', $valor),
                'dt_venda' => $dtVenda,
                'id_tipopagamento' => $tpPagamento,
                'quantidade'=>$quantidade
            ])->execute();
            $qtdBanco = Produto::select(['quantidade'])->where('id', $idProduto)->get();
            $qtd = intval($qtdBanco[0]["quantidade"]) - intval($quantidade);

            Produto::update(['quantidade' => $qtd])
                ->where('id', $idProduto)
                ->execute();
        } catch (Exception $e) {
            echo 'Exceção capturada', $e->getMessage(), "\n";
        }
    }

    public function excluirVenda()
    {
        $id = $_GET['id'];
        $venda = Venda::select(['quantidade', 'id_produto'])->where('id', $id)->get();
        $qtdProduto = Produto::select(['quantidade'])->where('id', $venda[0]['id_produto'])->get();

        Produto::update()
            ->set('quantidade', intval($qtdProduto[0]['quantidade'])+intval($venda[0]['quantidade']))
            ->where('id', $venda[0]['id_produto'])
        ->execute();

        Venda::delete()->where('id', $id)->execute();
        $this->redirecionar('listaVendas');
    }

    public function updateVenda()
    {  
        $id = $_POST['id'] ?? null;
        $valor = $_POST['valorTotal'] ?? null;
        $dtVenda = $_POST['dtVenda'] ?? null;
        $tpPagamento = $_POST['tpPagamento'] ?? null;
        $quantidade = $_POST['qtd'] ?? null;

        $venda = Venda::select(['quantidade, id_produto'])
            ->where('id', $id)
        ->get();

        $novaQtd = $venda[0]['quantidade'] - $quantidade;
        $qtdProduto = Produto::select(['quantidade'])->where('id', $venda[0]['id_produto'])->get();

        Produto::update()
            ->set('quantidade', $qtdProduto[0]['quantidade']+$novaQtd)
            ->where('id', $venda[0]['id_produto'])
        ->execute();

        Venda::update()
            ->set('valor', $valor)
            ->set('dt_venda', $dtVenda)
            ->set('id_tipopagamento', $tpPagamento)
            ->set('quantidade', $quantidade)
            ->set('valor', str_replace('.', ',', $valor))
            ->where('id', $id)
        ->execute();

        $this->redirecionar('listaVendas');
    }
}
