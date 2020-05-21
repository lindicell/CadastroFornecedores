<html>

<head>
	<title>Cadastro de Pagamentos</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
	<script src="https://igorescobar.github.io/jQuery-Mask-Plugin/js/jquery.mask.min.js"></script>

</head>
</html>


<?php

include 'ClassePagamento.php';

session_start();

$servername = "140.238.181.93";
$username = "fdb";
$password = "fdb";
$dbname = "fdb";

$nome = $_POST["campoNome"];
$valorpago = $_POST["campoValorPago"];
$data = $_POST["campoDataPagamento"];

echo $_COOKIE["campoNome"];
echo $_COOKIE["campoValorPago"];
echo $_COOKIE["campoDataPagamento"];




/// Verifica a conexao
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Problema de conexao: " . $conn->connect_error);
}
//Comando que será executado no banco
// insere na tablela cliente com suas respectivas colunas e valores
$sql = "INSERT INTO lindice_pagamento(nome, valorpago, data) VALUES ('" . $nome . "','" . $valorpago . "','" . $data . "')";
if ($conn->query($sql) === TRUE) { //aqui executa a o comando
    //echo "Dados salvo com sucesso";
} else {
    //echo "Error ao inserir " . $sql . "<br>" . $conn->error;
}
//Aqui fecha a conexao
$conn->close();


$cadastro_pagamento = new ClassePagamento();
$cadastro_pagamento->setCampoNome($nome);
$cadastro_pagamento->setcampoValorPago($valorpago);
$cadastro_pagamento->setcampoDataPagamento($data);


echo "<br><h3>Pagamento Cadastrado</h3><br>";

echo "<br>Olá fornecedor:" . $_POST["campoNome"], "<br> seu pagamento no valor de:" . $_POST["campoValorPago"], "<br>foi realizado com sucesso na data:" . $_POST["campoDataPagamento"];
echo "<br>";
?>

<a href="../telas/tablePagamentos.php" class="btn btn-primary btn-xs">Voltar</a>
