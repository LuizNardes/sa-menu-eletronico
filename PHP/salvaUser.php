<?php

    $id = $_GET['id_user'];
    $nome = $_POST['nName'];
    $senha = $_POST['nSenha'];


    include("conexao.php");

    $sql = "UPDATE usuarios"
    ." SET nome = '".$nome."', senha = '".$senha."'"
    ." WHERE id_user = ".$id."";

    $result = mysqli_query($conn,$sql);
    mysqli_close($conn);

    header("location:../listarUser.php");


?>