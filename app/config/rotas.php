<?php

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

// $rotas['editar-produto'] = array(
//     'rotas' => 'editar-produto',
//     'controller' => 'Controllers\Produtos',
//     'metodo' => 'editarProduto'
// );

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

// var_dump($rotas);
?>