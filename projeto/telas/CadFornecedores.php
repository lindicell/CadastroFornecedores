<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>

<head>
    <title>Cadastro de Fornecedores</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <script src="https://igorescobar.github.io/jQuery-Mask-Plugin/js/jquery.mask.min.js"></script>
</head>

<body>
    <div class="container">
        <h3>Tela Cadastro de Fornecedores</h3>
        <div class="row">
            <form action="../script/scriptCadFornecedores.php" method="post">
                <div class="form-group">
                    <label for="campoCnpj">*CNPJ:</label>
                    <input type="text" id="campoCnpj" name="campoCnpj" maxlength="11" class="form-control"
                        placeholder="Escreva o CNPJ" required>
                    <br>
                    <label for="campoRazaoSo">*Razao Social:</label>
                    <input type="text" name="campoRazaoSo" class="form-control" id="campoRazaoSo"
                        placeholder="Escreva a Razão Social" required>
                    <br>
                    <label for="campoNome">*Nome:</label>
                    <input type="text" placeholder="Escreva o nome" id="campoNome" name="campoNome" class="form-control"
                        required>
                    <br>
                    <label for="campoEnd">*Endereço: </label>
                    <input type="text" name="campoEnd" placeholder="Escreva o endereço" id="campoEnd"
                        class="form-control" required><br>
                    <br>
                    <label for="campoEmail">*Email: </label>
                    <input type="text" name="campoEmail" placeholder="Escreva o email" id="campoEmail"
                        class="form-control" required>
                    <br>
                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>