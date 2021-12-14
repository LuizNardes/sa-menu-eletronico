<?php

    $idGET = $_GET['id_user'];
    $nome = $_POST['nName'];
    $tipo = $_POST['nTipo'];
    $senha = $_POST['nSenha'];


    include("conexao.php");

  
    // Fazer o SQL de update OU insert
if($acao =='A') {
    $sql = "UPDATE usuarios"
    ." SET nome = '".$nome."', senha = '".$senha."'"
    ." WHERE id_user = ".$idGET."";

    $result = mysqli_query($conn,$sql);
    mysqli_close($conn);

    header("location:../listarUser.php");
}else {
    $sql = "INSERT INTO usuarios (nome, tipo_usuario,senha)"
            ." VALUES ('".$nome."','".$tipo."','".$senha."')";

    $result = mysqli_query($conn,$sql);
    mysqli_close($conn);        
    
    header("location:../listarUser.php");
}


?>