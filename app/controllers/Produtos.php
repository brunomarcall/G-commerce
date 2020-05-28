<?php
namespace Controllers;


use Config\Modelo;
use Controllers\Controlador;
use Models\Produto;

Class Produtos extends Controlador {
    

    public function __construct(){
        parent::__construct();
    }

    public function verificarProduto($id){
        $produto = Produto::select()->where('id', $id)->get();
        return ($produto) ?? false;
    }

    public function inserirProdutos(){
        $id = $_POST['id'] ?? null;
        $categoria = $_POST['categoria'] ?? null;
        $nome = $_POST['nome'] ?? null;
        $quantidade = $_POST['quantidade'] ?? null;

        echo "mostre os inputs:" .$id. " + " .$categoria. " + " .$nome." + " .$quantidade;

        if($id && $categoria && $nome && $quantidade){
            if(count(Produtos::verificarProduto($id) <= 0)){
                $_SESSION['codigo_produto'] = Produtos::adicionarProduto($id, $categoria, $nome, $quantidade);
                $_SESSION['cadastrado'] = 'Produto Cadastrado com Sucesso';
                $_SESSION['id'] = $id;
                $this->redirecionar('crud');
            }else {
                $_SESSION['erro'] = 'Produto já Cadastrado';
                $this->redirecionar('crud');
            }
        }
        $this->redirecionar();
    }

    public function adicionarProduto($id, $categoria, $nome, $quantidade){
        // $codigo_produto = md5(time().rand(0, 9999));
        Produto::insert([
            'id'=>$id,
            'categoria'=>$categoria,
            'nome'=>$nome,
            'quantidade'=>$quantidade,
            // 'codigo_produto'=>$codigo_produto
        ])->execute();

        $_SESSION['erro'] = '';

        $_SESSION['id'];
    }
}