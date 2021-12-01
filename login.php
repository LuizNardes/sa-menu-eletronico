<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" type="text/css" href="extensao.css"/>

</head>
    <form method="POST" action="php/validaLogin.php">
        <div>
            <label for="iLogin">Usuário: </label>
            <input type="email" id="iLogin" name="nLogin">
        </div>
        <p>
        <div>          
            <label for="iSenha">Senha: </label>
            <input type="password" id="iSenha" name="nSenha">
        </div>
        <p>
        <div>
            <button type="submit" name="lg" >Login</button>
            <a href="php/cadastro.php"><button type="button" name="cad">Cadastro</button></a>
        </div>
    </form>

    <!-- JS -->
    <script src="dist/js/bootstrap.min.js"></script>
    <script src="dist/js/main.js"></script>

</body>
</html>