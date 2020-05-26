<?php

/* 
 * Constantes.
 */


$teste = 10;
function Escopo($val1, $val2){
    $teste+=5;
    //echo "o valor de teste na função é = ".$teste;
}

function Calculadora($val3,$val4,$op){
    $resulta=0;

//    if($op == '+'){
//        $resulta= $val3+$val4; 
//    }
//    if($op == "-"){
//        $resulta = $val3 - $val4;
//    }
//    if($op == "*"){
//        $resulta= $val3 * $val4;
//    }
    
    switch ($op){
        case "+": $resulta= $val3+$val4; 
            break;
        case "-": $resulta= $val3-$val4; 
            break;
        case "*": $resulta= $val3*$val4;    
            break;
    }
    return $resulta;
}



define(NOME, 'Líndice');
//echo NOME."<br>";
//echo 'Meu nome é     '.NOME."<br>";

$intum = 100; 
$intdois=1.10;
//echo $intum."<br>";
//echo $intdois."<br>";
$resultado= $intum + $intdois;
$resultado1= $intum - $intdois;
$resultado2= ($intum * $intdois);

/*
echo $resultado."<br>";
echo $resultado1."<br>";
echo $resultado2."<br>";

/*
$variavel3=10;
echo $variavel3."<br>";
$variavel3 +=5;
echo $variavel3."<br>";
$variavel3 -=5;
echo $variavel3."<br>";
$variavel3 *=5;
echo $variavel3."<br>";
 * 
 */


$texto= "Será que vai chover?";
$texto1= "Depende";
//echo $texto . $texto1;

/*
if(1==1 && 2==2){
    echo 'sim!';
}

if(1==1 || 2==2){
    echo 'sim!';
}

if(1==1 or 2==2){
    echo 'sim!';
}

if(1==1 and 2==2){
    echo 'sim!';
}

if(1==1 XOR 2==2){
    echo 'sim!';
}
*/
$idade=75;
$idade = ($idade==75)?"venceu" : "voce chega lá";
//echo $idade;
if(idade==75){
  //  echo "venceu";
}
else{
    //echo "voce chega lá";
}


//$num=10;
//$result= 8 + 3 *2 + ++$num;
//echo $result."<br>";
//
//
//
//echo escopo(1,2);
//echo $teste."<br>";

echo Calculadora(5, 5, "*")


?>