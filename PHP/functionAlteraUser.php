<?php

    $nome = $_POST['nName'];
    $tipo = $_POST['nTipo'];
    $id = $_POST['nId'];

    include("conexao.php");

    $sql = "UPDATE usuarios SET "
    ."nome = '".$nome."', tipo_usuario = '".$tipo."' "
    . "WHERE id = '".$id."'";

    // var_dump($sql);
    // die();

    mysqli_query($conn, $sql); 
    mysqli_close($conn); 


    header("location:../listarUser.php");


?>