<?php

function checkLogin($bd, $email, $senha)
{
  $sql = <<<SQL
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
    
    return password_verify($senha, $row['hash_senha']);
  } 
  catch (Exception $e) {
    //error_log($e->getMessage(), 3, 'log.php');
    exit('Falha inesperada: ' . $e->getMessage());
  }
}

$errorMsg = "";
//if ($_SERVER["REQUEST_METHOD"] == "POST") {

  require('conexaoMySql.php');
  //mysqlConnect();

  $email = $_POST["email"] ?? "teste@123";
  $senha = $_POST["senha"] ?? "";

  if (checkLogin($bd, $email, $senha)) {
    header("location: home.html");
    exit();
  } 
  else
    $errorMsg = "Dados incorretos";
//}
