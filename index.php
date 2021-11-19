<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>Projeto Web</title>
  <style>
    body {
      font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
      line-height: 1.5rem;
      background-image: url("images/bg2.jpg");
      background-size: cover;
      margin: 0;
    }

    main {
      width: 60%;
      background-color: #eee;
      border: 0.5px solid gray;
      margin: 0;
      padding: 2% 4%;

      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
    }

    main>h2 {
      color: limegreen;
    }
  </style>
</head>

<body>
    <?php
        $acao = $_GET['acao'] ?? 'index';
        switch ($acao):
        case 'login':
            require('controllers/login.controller.php');
            //header('Location: view/login.view.php');
            break;
        case 'index':
    ?>
    <main>
        <h2>Seja Bem-Vindo!</h2>
        <a href="./view/login.view.php">Menu de opções</a>
    </main>
    <?php
        break;
        endswitch;
    ?>

</body>

</html>