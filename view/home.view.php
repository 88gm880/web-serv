
<?php
    session_start();

    //echo $_SESSION;
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

    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h2>A sua home </h2>
    </header>

    <main>
        <p>Teste 123</p>
        <form action = "/web-serv/controllers/logout.controller.php" method=post>
            <button class="btn btn-primary btn-block">logout</button>
        </form>
    </main>
</body>

</html>
