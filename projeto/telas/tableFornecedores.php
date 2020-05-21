<?php
$servername = "140.238.181.93";
$username = "fdb";
$password = "fdb";
$dbname = "fdb";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Verifica a conexao
if ($conn->connect_error) {
    die("problema na conexão: " . $conn->connect_error);
}
// Realizaa consulta
$sql = "SELECT id, nome, cnpj,razaoso, endereco, email FROM fdb.lindice_fornecedor";  // busca da tabela os registros
$result = $conn->query($sql); // result set grava tudo na memoria
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">

    </head>
    <body>

        <div class="container">
            <h2>Lista de Fornecedores</h2>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>CNPJ</th>
                        <th>Razao Social</th>
                        <th>Endereço</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            ?>
                            <tr>
                                <td><?php echo $row["nome"] ?></td>
                                <td><?php echo $row["cnpj"] ?>"</td>    
                                <td><?php echo $row["razaoso"] ?>"</td>
                                <td><?php echo $row["endereco"] ?>"</td>
                                <td><?php echo $row["email"] ?>"</td>


                                <td><a href="editFornecedor.php?id=<?php echo $row['id'];?>">Editar</a></td>
                                <td><a href="deleteFornecedor.php?id=<?php echo $row['id'];?>">Deletar</a></td>
                            </tr> 
                            <?php
                        }
                    }
                    ?>
                </tbody>
            </table>
            <a href="index.php" class="btn btn-primary btn-xs">Voltar</a>
        </div>

    </body>
</html>
