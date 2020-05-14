<?php

include 'Nome_da_classe.php';

$aula = new Nome_da_classe();
$aula ->funcao1("teste");

include 'Conta.php';
$utiliza_conta = new Conta();
$utiliza_conta->credito(15);
$saldo_atual = $utiliza_conta->saldo();
echo $saldo_atual;
?>
