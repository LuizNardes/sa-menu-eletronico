   
<?php


$id = $_GET['id'];

include('conexao.php');

$sql="DELETE FROM produtos WHERE id = ".$id.";";
$result = mysqli_query($conn,$sql);
mysqli_close($conn);

header("location:../listarProduto.php");
?>