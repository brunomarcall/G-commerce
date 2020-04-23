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
    'controller' => 'Controllers\Paginas',
    'metodo' => 'login'
);

$rotas['dashboard'] = array(
    'rotas' => 'dashboard',
    'controller' => 'Controllers\Paginas',
    'metodo' => 'dashboard'
);

$rotas['cadastro'] = array(
    'rotas' => 'cadastro',
    'controller' => 'Controllers\Paginas',
    'metodo' => 'cadastro'
);

$rotas['logout'] = array(
    'rotas' => 'logout',
    'controller' => 'Controllers\Paginas',
    'metodo' => 'logout'
);

$rotas['listar-produtos'] = array(
    'rotas' => 'produtos/listar',
    'controller' => 'Controllers\Produtos',
    'metodo' => 'listarProdutos'
);

// var_dump($rotas);
?>