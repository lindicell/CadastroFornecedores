<?php
$servername = "140.238.181.93";
$username = "fdb";
$password = "fdb";
$dbname = "fdb";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Verifica a conexao
if ($conn->connect_error) {
  die("problema na conexão: " . $conn->connect_error);
}
// Realizaa consulta
$sql = "SELECT id, nome, sobrenome FROM cliente";  // busca da tabela os registros
$result = $conn->query($sql);// result set grava tudo na memoria

if ($result->num_rows > 0) {  
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]."->".$row["nome"].   "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>