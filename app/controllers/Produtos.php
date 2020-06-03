<?php
namespace Controllers;


use Config\Modelo;
use Controllers\Controlador;
use Models\Produto;

Class Produtos extends Controlador {
    

    public function __construct(){
        parent::__construct();
    }

    public static function verificarProduto($id)
    {
        return (Produto::select()->where('id', $id)->get()) ?? false;
    }

    public function inserirProdutos(){
        $id = $_POST['id'] ?? null;
        $categoria = $_POST['categoria'] ?? null;
        $nome = $_POST['nome'] ?? null;
        $quantidade = $_POST['quantidade'] ?? null;

        if($id && $categoria && $nome && $quantidade){
            $produto = Produtos::verificarProduto($id);
            if(count($produto) <= 0){
                $_SESSION['codigo_produto'] = Produtos::adicionarProduto($id, $categoria, $nome, $quantidade);
                $_SESSION['cadastrado'] = 'Produto Cadastrado com Sucesso';
                $_SESSION['id'] = $id;
                $this->redirecionar('listar');
            }else {
                unset($_SESSION['cadastrado']);
                $_SESSION['erro'] = 'Produto já Cadastrado';
                $this->redirecionar('listar');
            }
        }
        $this->redirecionar();
    }

    public function adicionarProduto($id, $categoria, $nome, $quantidade){
        try {
            Produto::insert([
                'id'=>$id,
                'categoria'=>$categoria,
                'nome'=>$nome,
                'quantidade'=>$quantidade,
                'codigo_produto'=>0
            ])->execute();
        } catch (Exception $e) {
            echo 'Exceção capturada: ',  $e->getMessage(), "\n";
        }
    }

    public function editarProduto($id) {
        
    }

    public function excluirProduto() {
        $id = $_GET['id'];
        Produto::delete()->where('id', $id)->execute();
        $this->redirecionar('listar');
    }

}