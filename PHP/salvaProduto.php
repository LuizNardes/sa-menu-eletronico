<?php
  

    $nome = $_POST['nName'];
    $qtd = $_POST['nQtd'];
    $desc = $_POST['nDesc'];
    $preco = $_POST['nPreco'];
    $categoria = $_POST['nCategoria'];
H
    include("conexao.php");

    $sql = "INSERT INTO produtos"
    ."(nome, qtd, descricao, preco, id-categoria)"
    . "VALUES ('".$nome."','".$qtd."','".$desc."',".$preco.",".$categoria.");";

    $result = mysqli_query($conn,$sql);
    mysqli_close($conn);

    header("location:addProdutos.php");


?>