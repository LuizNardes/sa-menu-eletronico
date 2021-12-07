<?php
    include('php/function.php');
    
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Altera User</title>
</head>

<body>
    
<form method="POST" action="php/functionAlteraUser.php?acao=A&id=<?php echo $_GET['id']; ?>">
    <p>
        <label for="iCadastro">Matrícula</label>
        <input type="number" id="iId" name="nId" readonly value="<?php echo $_GET['id']; ?>">
    </p>
    <p>
        <label for="iDescricao">Nome</label>
        <input type="text" id="iName" name="nName" value="<?php echo nomeUser($_GET['id']); ?>">
    </p>
    <p>
        <label for="iTipo">Tipo Usuário:</label>
        <input type="text" id="iTipo" name="nTipo" value="<?php echo descricaoUserByID($_GET['id']); ?>">
    </p>
    <p>
        <input type="submit" value="Alterar">
    </p>
</form>


</body>
</html>