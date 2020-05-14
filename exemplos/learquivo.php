<?php

$arquivo = fopen("teste.txt", "r");
if ($arquivo == false)
    echo ('Nao foi possivel abrir o arquivo');
while (true)
    {
    $linha = fgets($arquivo);
    if(linha == null)
        break;
    echo $linha. '<br>';
    }
    fclose($arquivo);
?>