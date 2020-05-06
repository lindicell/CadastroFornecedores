<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



/*$nro1 =  $_POST["campo1"];
$nro2 =  $_POST["campo2"];
$sinal =  $_POST["campo3"];


if($sinal == '+'){
    echo $nro1+$nro2;
}
if($sinal == '-'){
    echo $nro1-$nro2;
}
if($sinal == '*'){
    echo $nro1*$nro2;
}
if($sinal == '/'){
    echo $nro1/$nro2;
}*/


echo "campo hidden:" . $_POST["escondido"];
echo "<br>Oi, seu ID é: " . $_POST["id"]; 
echo "Sua mensagem: " . $_POST["mensagem"]; 

echo "Seu sistema operacional é: " . $_POST["sistema"]; 
echo "<br>Seu monitor é: " . $_POST["monitor"]; 


if(isset($_POST["numeros"])) 
{
 echo "Os números de sua preferência são:<BR>"; 
foreach($_POST["numeros"] as $numero) 
{
 echo "- " . $numero . "<BR>"; } } 
else { 
echo "Você não escolheu número preferido!<br>"; }  
if(isset($_POST["news"])) { 
    echo "Você deseja receber as novidades por email!"; 
    
} 
else { 
    echo "Você não quer receber novidades por email..."; 
    
} 

echo "Seu processador é: " . $_POST["processador"] . "<BR>"; 
// Verifica se usuário escolheu algum livro 
if(isset($_POST["livros"])) 
{ 
echo "O(s) livro(s) que você deseja comprar:<br>"; 
foreach($_POST["livros"] as $livro) 
{ echo "- " . $livro . "<br>"; }
 } else 
{ 
	echo "Você não escolheu nenhum livro!"; 
} 



?> 









?> 

