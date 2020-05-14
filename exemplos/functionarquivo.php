<?php

function CriaArquivo($arquivo, $dados) {
    $fp = fopen("arquivo.txt", "a");
    $escreve = fwrite($fp, $dados);


    fclose($fp);
}

?>