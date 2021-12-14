<?php

    $nome = $_POST['nName'];
    $senha = $_POST['nSenha'];

    include("conexao.php");

    $sql = "INSERT INTO usuarios"
    ."(nome, senha)"
    . "VALUES ('".$nome."','".$senha."');";

    $result = mysqli_query($conn,$sql);
    mysqli_close($conn);

    header("location:../addUser.php");


?>