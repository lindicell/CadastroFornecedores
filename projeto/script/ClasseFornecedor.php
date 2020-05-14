<?php

class ClasseFornecedor {

    private $campoNome = "";
    private $campoCnpj = 0;
    private $campoRazaoSo = "";
    private $campoEnd = "";
    private $campoEmail = "";

    function getCampoNome() {
        return $this->campoNome;
    }

    function setCampoNome($campoNome) {
        $this->campoNome = $campoNome;
    }

    function getCampoCnpj() {
        return $this->campoCnpj;
    }

    function setCampoCnpj($campoCnpj) {
        $this->campoCnpj = $campoCnpj;
    }

    function getCampoRazaoSo() {
        return $this->campoRazaoSo;
    }

    function setCampoRazaoSo($campoRazaoSo) {
        $this->campoRazaoSo = $campoRazaoSo;
    }

    function getCampoEnd() {
        return $this->campoEnd;
    }

    function setCampoEnd($campoEnd) {
        $this->campoEnd = $campoEnd;
    }

    function getCampoEmail() {
        return $this->campoEmail;
    }

    function setCampoEmail($campoEmail) {
        $this->campoEmail = $campoEmail;
    }

}

?>