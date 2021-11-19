<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.simplecss.org/simple.min.css">
    <title>Welcome</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-CuOF+2SnTUfTwSZjCXf01h7uYhfOBuxIhGKPbfEJ3+FqH/s6cIFN9bGr1HmAg4fQ" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h1>Seja bem vindo! </h1>
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