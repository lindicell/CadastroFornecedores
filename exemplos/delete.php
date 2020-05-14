<?php
$servername = "140.238.181.93";
$username = "fdb";
$password = "fdb";
$dbname = "fdb";
// Criar a conexao
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("problema de conexão " . $conn->connect_error);
}

// sql to delete a record
$id       = $_POST["id"];

$sql = "DELETE FROM cliente WHERE id=".$id;

if ($conn->query($sql) === TRUE) {
  echo "Registro deletado com sucerro";
} else {
  echo "Erro ao deletar o registro: " . $conn->error;
}

$conn->close();
?>