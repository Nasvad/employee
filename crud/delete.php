<?php
$id = $_GET['id'];

//PAGINA DE EDIÇÃO DE FUNCIONÁRIOS
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

  // sql to delete a record
  $sql = "DELETE FROM funcionários WHERE id=$id";

  // use exec() because no results are returned
  $conn->exec($sql);
  //echo "Cadastro excluído com sucesso!";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;

header('Location: ../vis_user.php');

?>