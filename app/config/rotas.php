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

// var_dump($rotas);
?>