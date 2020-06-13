<!DOCTYPE html>
<html lang="pt-br">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <style>
    #buttonL {
      background-color: #ffa500;
    }
  </style>

  <title>Produtos</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="app/views/styles/css/sb-admin-2.css" rel="stylesheet">
  <link rel="shortcut icon" href="app/views/styles/img/img/Logo_circle.png">
</head>

<body class="bg-gradient-primary">

  <!-- Outer Row -->
  <div class="row justify-content-center">
    <div class="col-xl-10 col-lg-12 col-md-9">
      <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
          <!-- Nested Row within Card Body -->
          <div class="container" style="margin-top: 40px;">
            <h3>Produtos</h3>
            <br>

            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Código</th>
                  <th scope="col">Nome</th>
                  <th scope="col">Categoria</th>
                  <th scope="col">Quantidade</th>
                  <th scope="col"><span style="margin-left: 40px;">Ação</span></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <?php

                  use Config\Modelo;
                  use Models\Produto;

                  $produtos = Produto::
                    select(['produtos.id','produtos.nome', 'b.nome nmcategoria', 'produtos.quantidade'])
                    ->innerJoin('categorias as b', function($join) 
                    {
                        $join->on('produtos.id_categoria', '=', 'b.id');
                    })
                    ->where('id_usuario', $_SESSION['user']['id'])
                    ->get();
                
                  foreach ($produtos as $item) {


                  ?>
                    <td><?php echo $item['id'] ?></td>
                    <td><?php echo $item['nome'] ?></td>
                    <td><?php echo $item['nmcategoria'] ?></td>
                    <td><?php echo $item['quantidade'] ?></td>
                    <td>
                      <a id="buttonL" class="btn btn-warning btn-sm" href="<?=BASE_URL?>editarProduto?id=<?php echo $item['id']?>" role="button">Editar</a>
                      <a class="btn btn-danger btn-sm" href="<?=BASE_URL?>excluirProduto?id=<?php echo $item['id']?>"role="button">Excluir</a>
                    </td>
                </tr>
              <?php } ?>
              </tbody>
            </table>
          </div>
          <a style="float: right; margin-right: 100px; margin-bottom: 10px" class="btn btn-primary btn-sm" href="cadastrarProduto" role="button">Cadastrar</a>
          <a style="float: right; margin-right: 8px; margin-bottom: 10px" class="btn btn-primary btn-sm" href="dashboard" role="button">voltar</a>
          
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>