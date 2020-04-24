<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Cadastro</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="app/views/styles/css/sb-admin-2.css" rel="stylesheet">
  <link rel="shortcut icon" href="app/views/styles/img/img/Logo_circle.png">

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <img src="app/views/styles/img/img/Logo.png" height="50px" width="140px">
                <h1 class="h4 text-gray-900 mt-4 mb-4">Crie sua conta!</h1>
              </div>
              <form action="<?=BASE_URL?>/cadastro" method="post" class="user">
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input name="nome" type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="Nome">
                  </div>
                  <div class="col-sm-6">
                    <input name="sobrenome" type="text" class="form-control form-control-user" id="exampleLastName" placeholder="Sobrenome">
                  </div>
                </div>
                <div class="form-group">
                  <input name="email" type="email" class="form-control form-control-user" id="exampleInputEmail" placeholder="Email">
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input name="senha" type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Senha">
                  </div>
                  <div class="col-sm-6">
                    <input name="confirme" type="password" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Confirme sua senha">
                  </div>
                </div>
                <button type="submit" class="btn btn-primary btn-user btn-block">
                      Entrar
                    </button>
                <hr>
                
              </form>
              
              <div class="text-center">
                <a class="small" href="<?=BASE_URL?>/logout">Voltar</a>
              </div>
            
            </div>
          </div>
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
