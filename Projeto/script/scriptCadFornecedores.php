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

include 'ClasseFornecedor.php';

session_start();
echo "Cookie:", $_COOKIE["nome"], "<br>";


$servername = "140.238.181.93";
$username = "fdb";
$password = "fdb";
$dbname = "fdb";


$fp = fopen("teste.txt", "a");
$escreve = fwrite($fp, "nome=" . $nome . "cnpj=" . $cnpj . "Razao Social=" . $razaoso . "Email=" . $email . "endereco=" . $endereco);


fclose($fp);

echo "Usa da sessao:<br>" . $_SESSION["id"], "<br>";

$nome = $_POST["campoNome"];
$cnpj = $_POST["campoCnpj"];
$razaoso = $_POST["campoRazaoSo"];
$endereco = $_POST["campoEnd"];
$email = $_POST["campoEmail"];

/// Verifica a conexao
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Problema de conexao: " . $conn->connect_error);
}
//Comando que será executado no banco
// insere na tablela cliente com suas respectivas colunas e valores
$sql = "INSERT INTO lindice_fornecedor(nome, cnpj, razaoso, endereco, email) VALUES ('" . $nome . "','" . $cnpj . "','" . $razaoso . "','" . $endereco. "','" .$email."')";

if ($conn->query($sql) === TRUE) { //aqui executa a o comando
    //echo "Dados salvo com sucesso";
} else {
    //echo "Error ao inserir " . $sql . "<br>" . $conn->error;
}
//Aqui fecha a conexao
$conn->close();

$cadastro_fornecedor = new ClasseFornecedor();

$cadastro_fornecedor->setCampoNome($nome);
$cadastro_fornecedor->setcampoCnpj($cnpj);
$cadastro_fornecedor->setcampoRazaoSo($razaoso);
$cadastro_fornecedor->setcampoEnd($endereco);
$cadastro_fornecedor->setcampoEmail($email);

echo "<br><h3>Fornecedor Cadastrado</h3><br>";

echo "<br>Olá fornecedor:  " . $_POST["campoNome"], "<br>";
echo "<br>";
echo "Seu CNPJ é: " . $_POST["campoCnpj"];
echo "<br>";
echo "Sua Razão social é: " . $_POST["campoRazaoSo"];
echo "<br>";
echo "Seu endereco: " . $_POST["campoEnd"];
echo "<br>";
echo "Email cadastrado: " . $_POST["campoEmail"];
echo "<br>";
?>

  <a href="../telas/index.php" class="btn btn-primary btn-xs">Voltar</a>
