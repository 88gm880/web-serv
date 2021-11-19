
<?php
    session_start();

    if(empty($_SESSION['logado']) || $_SESSION['logado'] == false) {
        if($_SESSION['logado'])
            header('Location: login.view.php?empty=true');
        echo "no";
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

<link rel="stylesheet" href="../style.css">
</head>
<body class="bg-img">
    <div class="container">
        <div class="box">
            <h1>Procure sua receita!</h1>

            <div class="row py-4">
                <form action="/web-serv/view/receita.view.php" method="GET">
                <input type="text" name="receita">
                <button class="btn btn-primary mt-4">Pesquisar</button>
                </form>
                <a class="btn btn-primary mt-4" href="../controllers/logout.controller.php">Sair</a>
            </div>

        </div>

    </div>

</body>

</html>

