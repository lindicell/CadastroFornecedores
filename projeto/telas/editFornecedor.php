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

$query = "SELECT * FROM fdb.lindice_fornecedor WHERE id= $id";
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
        <title>Atualizar Fornecedor</title>
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
            <h3>Tela Atualizar Fornecedor</h3>
            <div class="row">
                <?php
                if ($result->num_rows > 0) {
                    $exibe = $result->fetch_assoc();
                    ?>
                    <form action="updateFornecedor.php" method="post">

                        <div class="form-group">
                            
                            <input type="hidden" name="id" value=<?=$id?> </input>
                            
                            <label for="campoCnpj">*CNPJ:</label>
                            <input type="text" id="campoCnpj" name="campoCnpj" class="form-control" value="<?php echo $exibe['cnpj']?>">
                            <br>
                            <label for="campoRazaoSo">*Razao Social:</label>
                            <input type="text" name="campoRazaoSo" class="form-control" id="campoRazaoSo" value="<?php echo $exibe['razaoso'] ?>">
                            <br>
                            <label for="campoNome">*Nome:</label>
                            <input type="text" placeholder="Escreva o nome" class="form-control" id="campoNome" name="campoNome"  value="<?php echo $exibe['nome'] ?>">
                            <br>
                            <label for="campoEnd">*Endereço: </label>
                            <input type="text" name="campoEnd" placeholder="Escreva o endereço" class="form-control" id="campoEnd" value="<?php echo $exibe['endereco'] ?>" ><br>
                            <br>
                            <label for="campoEmail">*Email: </label>
                            <input type="text" name="campoEmail" placeholder="Escreva o email" class="form-control" id="campoEmail" value="<?php echo $exibe['email'] ?>">
                          
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
