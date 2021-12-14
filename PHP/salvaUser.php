<?php

    $nome = $_POST['nName'];
    $tipo = $_POST['nTipo'];
    $senha = $_POST['nSenha'];

    include("conexao.php");

    $sql = "INSERT INTO usuarios"
    ."(nome, tipo_usuario, senha)"
    . "VALUES ('".$nome."','".$tipo."','".$senha."');";

    $result = mysqli_query($conn,$sql);
    mysqli_close($conn);

    header("location:../addUser.php");


?>