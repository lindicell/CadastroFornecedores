<?php

$servername = "140.238.181.93";
$username = "fdb";
$password = "fdb";
$dbname = "fdb";
 //Criar a conexao
$conn = new mysqli($servername, $username, $password, $dbname);
//Check connection
if ($conn->connect_error) {
   die("problema de conexão " . $conn->connect_error);
}

// sql to delete a record
$id = $_GET["id"];
$query = "DELETE FROM fdb.lindice_fornecedor WHERE id= $id";


//query execution
$result = mysqli_query($conn,$query);

header('Location:tableFornecedores.php');

//display message to user 
//if($result){
/*	$_SESSION['success_message'] = 'User data deleted successfully';
}else{
	$_SESSION['error_message'] = 'User data couldn\'t be deleted';
	header('Location: tablePagamentos.php');
}	
$conn->close();
 * 
 */
?>