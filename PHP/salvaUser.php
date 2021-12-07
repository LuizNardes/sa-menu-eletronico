<?php

    $nome = $_POST['nName'];
    $data_nasc = $_POST['nDtNasc'];
    $login = $_POST['nLogin'];
    $senha = $_POST['nSenha'];

    include("conexao.php");

    $sql = "INSERT INTO usuarios"
    ."(nome, data_nasc, login, senha)"
    . "VALUES ('".$nome."','".$data_nasc."','".$login."','".$senha."');";

    $result = mysqli_query($conn,$sql);
    mysqli_close($conn);

    header("location:login.php");


?>