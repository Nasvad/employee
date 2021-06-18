<?php
//LOCAL
  //$servername = "localhost";
  //$username = "root";
  //$password = "";
  //$dbname   = "projeto_aluno";

  //HEROKU
$servername = "xlf3ljx3beaucz9x.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$username = "qhk1cyx98g8k22id";
$password = "zgffr5qudwurqol1";
$dbname   = "d5ppxxl81au16tva";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);

  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Conexão bem sucedida!";
} catch(PDOException $e) {
  echo "Conexão falhou! :(" . $e->getMessage();
}
?>