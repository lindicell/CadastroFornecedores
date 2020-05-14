<?php

$nome = "Lindice";
$endereco = "rua teste";


$fp = fopen("teste.txt", "a");
$escreve = fwrite($fp,"nome=" .$nome."endereco=".$endereco);
        

fclose($fp);

?>