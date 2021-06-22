<?php

$nome  = $_POST['nome'];
$idade = $_POST['idade'];
$email = $_POST['email'];

//PAGINA DE CADASTRO DE USUÁRIOS
// Dados de conexão LOCAL
//$servername = "localhost";
//$username   = "root";
//$password   = "";
//$dbname     = "employee";

//HEROKU
$servername = "xlf3ljx3beaucz9x.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$username = "qhk1cyx98g8k22id";
$password = "zgffr5qudwurqol1";
$dbname   = "d5ppxxl81au16tva";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "INSERT INTO funcionários (Nome, Idade, Email)
  VALUES ('$nome', '$idade', '$email')";
  // use exec() because no results are returned
  $conn->exec($sql);
  //echo "Funcionário cadastrado com sucesso!";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;

header('Location: ../vis_user.php');
?>