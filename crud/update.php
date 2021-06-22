<?php

//PAGINA DE EDIÇÃO DE FUNCIONÁRIOS
// Dados de conexão LOCAL
//$servername = "localhost";
//$username   = "root";
//$password   = "";
//$dbname     = "blog";

//HEROKU
$servername = "xlf3ljx3beaucz9x.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$username = "qhk1cyx98g8k22id";
$password = "zgffr5qudwurqol1";
$dbname   = "d5ppxxl81au16tva";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $sql = "UPDATE funcionários SET Idade='34' WHERE id=2";

  // Prepare statement
  $stmt = $conn->prepare($sql);

  // execute the query
  $stmt->execute();

  // echo a message to say the UPDATE succeeded
  echo $stmt->rowCount() . " Cadastro atualizado com sucesso!";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>
