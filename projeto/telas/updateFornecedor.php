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
$id = $_POST["id"];
$cnpj = $_POST["campoCnpj"];
$razaoso = $_POST["campoRazaoSo"];
$nome = $_POST["campoNome"];
$endereco = $_POST["campoEnd"];
$email = $_POST["campoEmail"];


$sql = "update lindice_fornecedor set cnpj='$cnpj',razaoso='$razaoso',nome='$nome', endereco='$endereco', email='$email' where id=" . $id;

echo $sql;

if ($conn->query($sql) === TRUE) {
    header('Location:tableFornecedores.php');
} else {
    echo "Error ao inserir " . $sql . "<br>" . $conn->error;
}
//Aqui fecha a conexao
$conn->close();
?>
