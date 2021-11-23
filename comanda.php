<!DOCTYPE html>
<?php
    include('php/listarCategorias.php');
    $mesa = $_POST["nMesa"];
    // var_dump( $mesa);
    // die();
?>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Comanda Eletrônica</title>
</head>
<body>
    <p>Pedido da mesa: <?php echo $mesa ?> </p> 
    <form method="POST" action="php/#####.php">
    <p>
        <label for="iCategorias">Categorias: </label>
        <select name="nCategorias" id="iCategorias">
            <option value="0">Todas</option>
            <?php echo listar_categorias();  ?>
        </select>
    </p>
    <p>
        <input type="submit" value="Selecionar">
    </p>
</form>
<button><a href='index.php'>Voltar</a></button>








</body>
</html>