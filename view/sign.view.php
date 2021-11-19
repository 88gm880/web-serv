<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdn.simplecss.org/simple.min.css">
<title>Sign up</title>

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-CuOF+2SnTUfTwSZjCXf01h7uYhfOBuxIhGKPbfEJ3+FqH/s6cIFN9bGr1HmAg4fQ" crossorigin="anonymous">

<link rel="stylesheet" href="../style.css">
</head>

<body class="bg-img">
    <div class="container">
        <div class="box">
        <form action ="" method="POST">
            <h1>Realize seu cadastro</h1>

            <div class="row py-3">
                <label for="nome" class="form-label">Nome completo:</label><br>
                <input type="name" name="nome" class="form-control" id="email">
            </div>
            <div class="row py-3">
                <label for="email" class="form-label">E-mail:</label><br>
                <input type="email" name="email" class="form-control" id="email">
            </div>
            <div class="row py-3">
                <label for="senha" class="form-label">Senha:</label>
                <input type="password" name="senha" class="form-control">
            </div>
                <div class="row py-4">
                <button class="btn btn-primary btn-block">Cadastrar</button>
            </div>
        </form>
        </div>

    </div>

</body>

</html>