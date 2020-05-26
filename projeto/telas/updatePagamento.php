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
$nome = $_POST["campoNome"];
$valorpago = $_POST["campoValorPago"];


$sql = "update lindice_pagamento set nome='$nome', valorpago='$valorpago' where id=" . $id;

echo $sql;

if ($conn->query($sql) === TRUE) {
    header('Location:tablePagamentos.php');
} else {
    echo "Error ao inserir " . $sql . "<br>" . $conn->error;
}
//Aqui fecha a conexao
$conn->close();
?>
