<?php

function checkLogin($bd, $email, $senha)
{
    try{
        $sql = "SELECT hash_senha FROM usuarios WHERE email = '$email'";
        $query = $bd->query($sql);
        if($query->num_rows > 0):
            $hash_senha = $query->fetch_object()->hash_senha;
            if($hash_senha == $senha){
                return true;
            }
            return false;
        else:
            echo "Não há usuarios";
            return false;
        endif;
    }catch (Exception $e) {
         //error_log($e->getMessage(), 3, 'log.php');
         exit('Falha inesperada: ' . $e->getMessage());
    }

  /* $sql = <<<SQL
    SELECT hash_senha
    FROM cliente
    WHERE email = ?
    SQL;

  try {
    // Neste caso utilize prepared statements para prevenir
    // ataques do tipo SQL Injection, pois precisamos
    // inserir dados fornecidos pelo usuário na
    // consulta SQL (o email do usuário)
    $stmt = $bd->prepare($sql);
    $stmt->execute([$email]);
    $row = $stmt->fetch();
    if (!$row) return false; // nenhum resultado (email não encontrado)

    return password_verify($senha, $row['hash_senha']); */

}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    require('conexaoMySql.php');
    session_start();

    $email = $_POST["email"] ?? "";
    $senha = $_POST["senha"] ?? "";

    if (checkLogin($bd, $email, $senha)) {
        $_SESSION['logado'] = true;
        //$erro = false;
        header("location: view/home.view.php");
        //exit('Funcionou tudo');
    }
    else{
        //echo "deu ruim";
        header("location: view/login.view.php?erro=true");
    }
}

