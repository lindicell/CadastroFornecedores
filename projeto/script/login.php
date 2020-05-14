<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function Permissao($login,$senha,$val){
    $resposta=0;

    if($login == 'teste' && $senha == 123){
        header('location:index.php');

    }
    else{
        $resposta= "Permissão negada"; 
    }
    return $resposta;
}


echo Permissao("teste", 123);

?>