<?php
/*
function mysqlConnect()
{
  //$db_host = "fdb32.awardspace.net";
  $db_host = "localhost";
  $db_username = "3961934_web";
  $db_password = "senhaweb123";
  $db_name = "web_serv";
  //$db_name = "3961934_web";

  // dsn é apenas um acrônimo de database source name
  $dsn = "mysql:host=$db_host;dbname=$db_name;charset=utf8mb4";

  $options = [
    PDO::ATTR_EMULATE_PREPARES => false, // desativa a execução emulada de prepared statements
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // ativa o modo de erros para lançar exceções    
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, // altera o modo padrão do método fetch para FETCH_ASSOC
  ];

  try {
    $pdo = new PDO($dsn, $db_username, $db_password, $options);
    return $pdo;
  } 
  catch (Exception $e) {
    //error_log($e->getMessage(), 3, 'log.php');
    exit('Ocorreu uma falha na conexão com o BD: ' . $e->getMessage());
  }
}

*/

  $db_host = "localhost";
  $db_username = "userweb123";
  $db_password = "senhaweb123";
  $db_name = "web_serv";

    try{
        $bd = new mysqli($db_host, $db_username, $db_password, $db_name);
        //$bd -> set_charset('utf-8');
    }catch(Exception $e){
        throw new Exception('Erro na conexao' + $e->getMessage() );
    }

?>
