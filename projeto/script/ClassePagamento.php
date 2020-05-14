<?php

class ClassePagamento {

    private $campoNome = "";
    private $campoValorPago = 0;
    private $campoDataPagamento = "";
    
    function getCampoNome() {
        return $this->campoNome;
    }
    function setCampoNome($campoNome) {
        $this->campoNome = $campoNome;
    }
    function getCampoValorPago() {
        return $this->campoValorPago;
    }
        function setCampoValorPago($campoValorPago) {
        $this->campoValorPago = $campoValorPago;
    }
    function getCampoDataPagamento() {
        return $this->campoDataPagamento;
    }
    function setCampoDataPagamento($campoDataPagamento) {
        $this->campoDataPagamento = $campoDataPagamento;
    }
}

?>