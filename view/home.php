<!-- <?php
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';
    $erro = false;

    session_start(); //inicializar a sessão com chave aleatória

    hash($password);

    // check se as credenciais do usuario estão ok
    if ($email == 'webserv123' && $password == '123456') {
        $_SESSION['logado'] = true;
        $_SESSION['email'] = 'Admin';
        $_SESSION['cartao'] = '411111111111111';

        header('Location: pagina_segura.php');
    } else if (!empty($_POST)) {
        $erro = true;
    }

    //Checar se o usuário já está logado
    if (!empty($_SESSION['logado']) && $_SESSION['logado']) {
        header('Location: pagina_segura.php');
    }
?> -->


<?php
    session_start();

    if(empty($_SESSION['logado']) || $_SESSION['logado'] == false) {
        header('Location: login.php');
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.simplecss.org/simple.min.css">
    <title>Search recipes</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-CuOF+2SnTUfTwSZjCXf01h7uYhfOBuxIhGKPbfEJ3+FqH/s6cIFN9bGr1HmAg4fQ" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h2>🔐 Entre em sua conta </h2>
    </header>

    <main>
        <form method="POST" action="login.php">
            <?php if ($erro) : ?>
                <div style="background: #fafae1; padding: 15px; margin-bottom: 24px;">
                    📢 Usuário ou Senha inválidos! Tente novamente.
                </div>
            <?php endif; ?>

            <label>Usuário: </label><br />
            <input type="text" name="usuario" /><br />

            <label>Senha: </label><br />
            <input type="password" name="senha" /><br />

            <button>Entrar</button>
        </form>
    </main>
</body>

</html>
