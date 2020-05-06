<?php

$login = $_POST['admin'];

$senha = $_POST['admin'];

if ($login != admin || $senha != admin) {

    echo "Login e senha incorretos";
} else {
    header('Location: index.php');
}
?>
