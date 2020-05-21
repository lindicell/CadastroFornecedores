<?php
$servername = "140.238.181.93";
$username = "fdb";
$password = "fdb";
$dbname = "fdb";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$id = $_GET["id"];

if ($conn->connect_error) {
    die("problema na conexão: " . $conn->connect_error);
}
$id=$_GET['id'];

$query = "SELECT * FROM fdb.lindice_pagamento WHERE id= $id";
$result = $conn->query($query);
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>

    <head>
        <title>Atualizar Pagamentos</title>
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
            <h3>Tela Atualizar Pagamentos</h3>
            <div class="row">
                <?php
                if ($result->num_rows > 0) {
                    $exibe = $result->fetch_assoc();
                    ?>
                    <form action="updatePagamento.php" method="post">
                        <div class="form-group">
                            
                            <input type="hidden" name="id" value=<?=$id?> </input>
                            <br>
                            <label for="campoNomee">*Nome:</label>
                            <input type="text" placeholder="Escreva o nome" value="<?php echo $exibe['nome'] ?>" id="campoNome" name="campoNome" class="form-control" required>
                            
                            <br>
                            <label for="campoValorPagoo">*Valor pago:</label>
                            <input type="text" name="campoValorPago" id="campoValorPago" value="<?php echo $exibe['valorpago'] ?>" placeholder="R$"
                                   class="campoValorPago form-control" required>
                            <br>
                            <input type="submit" value="atualizar">
                        </div>
                    </form>
                <?php } else { ?>
                    <p>Registro não encontrado!</p>
<?php } ?>	
            </div>

        </div>
    </body>

</html>
<script>
    // $('.campoValorPago').mask('#.##0,00', { reverse: true });
</script>
