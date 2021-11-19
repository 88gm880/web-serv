<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>Welcome</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-CuOF+2SnTUfTwSZjCXf01h7uYhfOBuxIhGKPbfEJ3+FqH/s6cIFN9bGr1HmAg4fQ" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
</head>

<body class="bg-img">
    <?php
        $acao = $_GET['acao'] ?? 'index';
        switch ($acao):
        case 'login':
            require('controllers/login.controller.php');
            break;
        case 'cadastrar':
            break;
        case 'index':
    ?>

<nav class="navbar navbar-expand-lg navbar-light bg-transparent d-flex justify-content-center">
      <p class="navbar-brand">Geladeira Inteligente</p>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </nav>

      <div class="container">
        <div class="box">
          <div class="row">
            <h1 class="">Seja Bem-Vindo!</h1>
          </div>

          <div class="pt-5 row">
            <a class="btn btn-primary mb-4" href="./view/sign.view.php">Cadastrar</a>
            <a class="btn btn-primary mb-4" href="./view/login.view.php">Entrar</a>
          </div>
        </div>
      </div>

    <?php
        break;
        endswitch;
    ?>

</body>

</html>