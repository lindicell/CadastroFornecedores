<?php
include ('require.php'); // chama o arquivo

echo calcularequire(10);
$recebevalor = calcularequire(10);
$login = verificaUsuario();

echo '<br>';
echo "valor retornado= " . $recebevalor;
echo '<br>';
echo '<br>' . $login;



?>