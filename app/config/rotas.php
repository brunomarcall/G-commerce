<?php


//Rotas relacionadas a aplicação e os usuários
$rotas[''] = array(
    'rotas' => '',
    'controller' => 'Controllers\Paginas',
    'metodo' => 'home'
);

$rotas['home'] = array(
    'rotas' => 'home',
    'controller' => 'Controllers\Paginas',
    'metodo' => 'home'
);

$rotas['home'] = array(
    'rotas' => 'conexao',
    'controller' => 'Controllers\Dashboard',
    'metodo' => 'conexao'
);

$rotas['graficos'] = array(
    'rotas' => 'graficos',
    'controller' => 'Controllers\Paginas',
    'metodo' => 'graficos'
);

$rotas['relatorios'] = array(
    'rotas' => 'relatorios',
    'controller' => 'Controllers\Paginas',
    'metodo' => 'relatorios'
);

$rotas['esqueceuSenha'] = array(
    'rotas' => 'esqueceuSenha',
    'controller' => 'Controllers\Paginas',
    'metodo' => 'esqueceuSenha'
);

$rotas['404'] = array(
    'rotas' => '404',
    'controller' => 'Controllers\Paginas',
    'metodo' => 'erro404'
);

$rotas['login'] = array(
    'rotas' => 'login',
    'controller' => 'Controllers\Autenticacao',
    'metodo' => 'login'
);

$rotas['cadastro'] = array(
    'rotas' => 'cadastro',
    'controller' => 'Controllers\Paginas',
    'metodo' => 'cadastro'
);

$rotas['cadastro/usuario'] = array(
    'rotas' => 'cadastro/usuario',
    'controller' => 'Controllers\Autenticacao',
    'metodo' => 'cadastro'
);

$rotas['dashboard'] = array(
    'rotas' => 'dashboard',
    'controller' => 'Controllers\Paginas',
    'metodo' => 'dashboard'
);

$rotas['logout'] = array(
    'rotas' => 'logout',
    'controller' => 'Controllers\Autenticacao',
    'metodo' => 'logout'
);


//Rotas relacionadas Produtos
$rotas['listar-produtos'] = array(
    'rotas' => 'produtos/listar',
    'controller' => 'Controllers\Produtos',
    'metodo' => 'listarProdutos'
);

$rotas['cadastrar-Produto'] = array(
    'rotas' => 'cadastrarProduto',
    'controller' => 'Controllers\Paginas',
    'metodo' => 'cadastrarProduto'
);

$rotas['inserir-produto'] = array(
    'rotas' => 'inserir',
    'controller' => 'Controllers\Produtos',
    'metodo' => 'inserirProdutos'
);

$rotas['listar-produto'] = array(
    'rotas' => 'listar',
    'controller' => 'Controllers\Produtos',
    'metodo' => 'listarprodutos'
);

$rotas['listar-produto'] = array(
    'rotas' => 'listar',
    'controller' => 'Controllers\Paginas',
    'metodo' => 'listarprodutos'
);

$rotas['excluir-produto'] = array(
    'rotas' => 'excluirProduto',
    'controller' => 'Controllers\Produtos',
    'metodo' => 'excluirProduto'
);

$rotas['editarProduto'] = array(
    'rotas' => 'editarProduto',
    'controller' => 'Controllers\Paginas',
    'metodo' => 'editarProduto'
);

$rotas['updateProduto'] = array(
    'rotas' => 'updateProduto',
    'controller' => 'Controllers\Produtos',
    'metodo' => 'updateProduto'
);


//Rotas relacionadas Vendas
$rotas['listaVendas'] = array(
    'rotas' => 'listaVendas',
    'controller' => 'Controllers\Paginas',
    'metodo' => 'listaVendas'
);

$rotas['cadastroVenda'] = array(
    'rotas' => 'cadastroVenda',
    'controller' => 'Controllers\Paginas',
    'metodo' => 'cadastroVenda'
);

$rotas['inserirVenda'] = array(
    'rotas' => 'inserirVenda',
    'controller' => 'Controllers\Vendas',
    'metodo' => 'inserirVenda'
);

$rotas['editarVenda'] = array(
    'rotas' => 'editarVenda',
    'controller' => 'Controllers\Paginas',
    'metodo' => 'editarVenda'
);

$rotas['updateVenda'] = array(
    'rotas' => 'updateVenda',
    'controller' => 'Controllers\Vendas',
    'metodo' => 'updateVenda'
);

$rotas['excluirVenda'] = array(
    'rotas' => 'excluirVenda',
    'controller' => 'Controllers\Vendas',
    'metodo' => 'excluirVenda'
);

?>