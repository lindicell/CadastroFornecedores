<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
echo $_COOKIE["nome"]; 


echo "<br><h3>Pagamento Cadastrado</h3><br>"; 

echo "<br>Olá fornecedor:  " . $_POST["campoNome"], " seu pagamento no valor de:<br>". $_POST["campoValorPago"], "foi realizado com sucesso na data:". $_POST["campoDataPagamento"] ;
echo "<br>";
?>