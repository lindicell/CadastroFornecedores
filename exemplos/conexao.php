<?php
$servername = "140.238.181.93"; // servidor 
$username = "fdb";              //nome
$password = "fdb";              // a senha 

// Criando a conexão
$conexao = new mysqli($servername, $username, $password);

// Verifica a coenxão
if ($conexao->connect_error) {
  die("Problema na Conexão: " . $conn->connect_error);
}
echo "Conectado";
?>