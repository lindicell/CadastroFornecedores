<?php

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
$entrar = $_POST['entrar'];
$user = $_POST['user'];
$senha = ($_POST['senha']);

if (isset($entrar)) {

    $sql = "SELECT * FROM fdb.lindice_login WHERE user = '$user' AND senha = '$senha'";
    $resultado = $conn->query($sql);
    
    if ($resultado->num_rows <= 0) {
        echo"Usuario e senha desconhecido";
        die();
    } else {
        setcookie("user", $user);
        header("Location:index.php");
    }
}
?>