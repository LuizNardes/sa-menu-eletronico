<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>

    <!-- CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" type="text/css" href="extensao.css"/>

</head>
    <form method="POST" action="php/salvaUser.php">
        <div>
            <label for="iNome">Nome: </label>
            <input type="text" id="iNome" name="nNome">
        </div>
        <p>
        <div>          
            <label for="iDtNasc">Data de Nascimento: </label>
            <input type="date" id="iDtNasc" name="nDtNasc">
        </div>
        <p>
        <div>
            <label for="iLogin">Login: </label>
            <input type="email" id="iLogin" name="nLogin">
        </div>
        <p>
        <div>
            <label for="iSenha">Senha: </label>
            <input type="password" id="iSenha" name="nSenha">
        </div>
        <p>
        <div>
            <button type="submit" name="button" >Login</button>
            <button type="submit" name="button">Cadastrar</button>
        </div>
    </form>

    <!-- JS -->
    <script src="dist/js/bootstrap.min.js"></script>
    <script src="dist/js/main.js"></script>

</body>
</html>