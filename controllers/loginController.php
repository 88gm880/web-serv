<?php

function checkLogin($bd, $email, $senha)
{
    try{
        $sql = "SELECT hash_senha FROM usuarios WHERE email = '$email'";
        $query = $bd->query($sql);
        if($query->num_rows > 0):
            return true;
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

$errorMsg = "";
//if ($_SERVER["REQUEST_METHOD"] == "POST") {

  require('conexaoMySql.php');

  $email = $_POST["email"] ?? "teste@teste";
  $senha = $_POST["senha"] ?? "teste";

   if (checkLogin($bd, $email, $senha)) {
    header("location: home.html");
    exit('Funcionou tudo');
  } 
  else
    $errorMsg = "Dados incorretos";
//}
