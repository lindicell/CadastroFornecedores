<?php

session_start();
echo "Cookie:" , $_COOKIE["nome"],"<br>"; 

echo "Usa da sessao:<br>" .$_SESSION["id"],"<br>";

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

echo "<br><h3>Fornecedor Cadastrado</h3><br>"; 

echo "<br>Olá fornecedor:  " . $_POST["campoNome"], "<br>"; 
echo "<br>";
echo "Seu CNPJ é: " . $_POST["campoCnpj"]; 
echo "<br>";
echo "Sua Razão social é: " . $_POST["campoRazaoSo"]; 
echo "<br>";
echo "Seu endereco: " . $_POST["campoEnd"]; 
echo "<br>";
echo "Email cadastrado: " . $_POST["campoEmail"]; 
echo "<br>";

?>