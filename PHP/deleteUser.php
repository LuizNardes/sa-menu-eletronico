   
<?php


$id = $_GET['id'];

include('conexao.php');

$sql="DELETE FROM usuarios WHERE id = ".$id.";";
$result = mysqli_query($conn,$sql);
mysqli_close($conn);

header("location:../listarUser.php");
?>