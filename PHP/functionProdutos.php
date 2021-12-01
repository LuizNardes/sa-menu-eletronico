<?php
  

    $nome = $_POST['nNome'];
    $qtd = $_POST['nQtd'];
    $desc = $_POST['nDesc'];
    $preco = $_POST['nPreco'];
    $categoria = $_POST['nCategoria'];

    include("../PHP/conexao.php");

    $sql = "INSERT INTO produtos"
    ."(nome, qtd, descricao, preco, id-categoria)"
    . "VALUES ('".$nome."','".$qtd."','".$desc."',".$preco.",".$categoria.");";

    var_dump($sql);
    die();

    $result = mysqli_query($conn,$sql);
    mysqli_close($conn);

    header("location:addProdutos.php");


?>