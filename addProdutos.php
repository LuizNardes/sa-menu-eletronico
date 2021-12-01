<?php
    include('../php/listarCategorias.php');

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="POST" action="php/functionProdutos.php">
        <div>
            <label for="iNome">Nome: </label>
            <input type="text" id="iNome" name="nNome">
        </div>
        <p>
        <div>          
            <label for="iQtd">Disponibilidade: </label>
            <input type="text" id="iQtd" name="nQtd">
        <div>
            <label for="iNome">Descrição: </label>
            <textarea name="nDesc"  cols="30" rows="10"></textarea>
        </div>
        <p>
        <div>          
            <label for="iPreco">Preço: </label>
            <input type="number" id="iPreco" name="nPreco" min="0.00" max="10000.00" step="0.01" />
        </div>
        <p>
        <div>
            <label for="iCategoria">Categoria: </label>
            <select name="nCategoria" id="iCategorias">
                <?php echo listar_categorias();  ?>
          </select>
        </div>
        <p>
        <div>
            <label for="iFoto">Foto: </label>
            <input type="#" id="#" name="#">
        </div>
        <div>
            <button type="submit" name="button">Cadastrar</button>
        </div>
    </form>
</body>
</html>