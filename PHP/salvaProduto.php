<?php
  
    include("conexao.php");


    $nome = $_POST['nName'];
    $qtd = $_POST['nQtd'];
    $desc = $_POST['nDesc'];
    $preco = $_POST['nPreco'];
    $categoria = $_POST['nCategoria'];

    $sql = "INSERT INTO produtos"
    ."(nome, qtd, descricao, preco, id_categoria)"
    . "VALUES ('".$nome."','".$qtd."','".$desc."',".$preco.",".$categoria.");";


    $result = mysqli_query($conn,$sql);
    mysqli_close($conn);



    header("location:../listarProduto.php");


?>