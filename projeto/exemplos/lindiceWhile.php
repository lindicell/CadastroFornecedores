<?php


function Whileteste($quantidade){
    $quantidade = 0;
    while ($quantidade<=5){      
        echo "o numero eh: $quantidade <br>";
        $resultado = $quantidade+=1;      
    } 
    return $resultado;
}


echo Whileteste(5);

?>