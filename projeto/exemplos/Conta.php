<?php

class Conta{
    private $saldo = 0;
    
    function saldo() {
        return $this->saldo;
    }
        function credito($valor) {
        $this->saldo += $valor;
    }
    
}

?>