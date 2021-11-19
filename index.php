<!DOCTYPE html>
<?php
    include('php/listarMesas.php');
    
?>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Comanda Eletrônica</title>
</head>
<body>
    <form method="POST" action="php/comanda.php">
    <p>
        <label for="iDescricao">Seleção de mesas:</label>
        <select name="nMesa" id="iMesa">
            <?php echo listar_mesas();  ?>
        </select>
    </p>
    <p>
        <input type="submit" value="Selecionar>
    </p>
</form>
</body>
</html>