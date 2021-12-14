   
<?php


$id = $_GET['id_user'];

include('conexao.php');

$sql="DELETE FROM usuarios WHERE id_user = ".$id.";";
$result = mysqli_query($conn,$sql);
mysqli_close($conn);

header("location:../listarUser.php");
?>