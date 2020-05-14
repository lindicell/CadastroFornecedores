<?php
//codigo para atulização de registro
$servername = "140.238.181.93";
$username = "fdb";
$password = "fdb";
$dbname = "fdb";
/// Verifica a conexao
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Problema de conexao: " . $conn->connect_error);
}
//Comando que será executado no banco
// insere na tablela cliente com suas respectivas colunas e valores
$sobrenome = $_POST["sobrenome"];
$id       = $_POST["id"];
$id = 14;
$sobrenome = "Franco";
$sql = "update cliente set sobrenome='$sobrenome' where id=".$id;
echo $sql; 

if ($conn->query($sql) === TRUE) {
  echo "Dados alterado com sucesso";
} else {
  echo "Error ao inserir " . $sql . "<br>" . $conn->error;
}
//Aqui fecha a conexao
$conn->close();
?>
