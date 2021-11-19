<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>Welcome</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-CuOF+2SnTUfTwSZjCXf01h7uYhfOBuxIhGKPbfEJ3+FqH/s6cIFN9bGr1HmAg4fQ" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
</head>

<body>
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

    <nav class="navbar navbar-expand-lg navbar-light bg-success d-flex justify-content-center">
      <a class="navbar-brand" href="#">Recipes</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </nav>

      <div class="container">
        <div class="box">
          <h2>Seja Bem-Vindo!</h2>
          <a class="btn btn-primary" href="./view/sign.view.html">Cadastrar</a> 
          <button type="submit" class="btn btn-secondary" href="./view/home.view.php">Entrar</button>
        </div>  
      </div>

    

    <?php
        break;
        endswitch;
    ?>

</body>

</html>