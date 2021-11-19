<?php
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';
    $erro = false;

    session_start();
    if(!empty($_SESSION['logado']) && $_SESSION['logado'] == true) {
        header('location: home.view.php');
    }
?>

<!doctype html>
<html lang="pt-BR">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Tabelas</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-CuOF+2SnTUfTwSZjCXf01h7uYhfOBuxIhGKPbfEJ3+FqH/s6cIFN9bGr1HmAg4fQ" crossorigin="anonymous">

  <link rel="stylesheet" href="style.css">
</head>

<body>
  
  <div class="container">
    <main>
      <h3>Efetue login</h3>
      <form action="/web-serv/index.php?acao=login" method="POST">
        <?php if (!empty($_GET['erro']) && $_GET['erro']) : ?>
            <div style="background: #fafae1; padding: 15px; margin-bottom: 24px;">
                📢 Usuário ou Senha inválidos! Tente novamente.
            </div>
        <?php endif; ?>

        <!-- E-mail e senha -->
        <div class="col-sm-12">
          <label for="email" class="form-label">E-mail</label><br>
          <input type="email" name="email" class="form-control" id="email">
        </div>
        <div class="col-sm-12">
          <label for="senha" class="form-label">Senha</label>
          <input type="password" name="senha" class="form-control">
        </div>
        <div class="col-sm-12 d-grid">
          <button class="btn btn-primary btn-block">Entrar</button>
        </div>
      </form>

      <a href="#">Esqueci a senha</a>
    </main>
  </div>

</body>

</html>