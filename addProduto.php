<!doctype html>
<html lang="pt-br">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Menu</title>
  </head>
  <body style="height: 655px;">
  <nav class="p-3 mb-2 bg-dark text-white navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <img class="rounded-circle" src="dist/images/logo2.0.jpeg" alt="logo da loja">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="p-3 mb-2 bg-dark text-white nav-link active" aria-current="page" >Nome Loja</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"></a>
              </li>
              <li class="nav-item dropdown">
                <a class="p-3 mb-2 bg-dark text-white nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Usuarios
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="listarUser.php">Verificar</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Adicionar</a></li>              
                </ul>
              </li>

              <li class="nav-item dropdown">
                <a class="p-3 mb-2 bg-dark text-white nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Produtos
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="listarProduto.php">Verificar</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Adicionar</a></li>
                </ul>
              </li>

              <li class="nav-item dropdown">
                <a class="p-3 mb-2 bg-dark text-white nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Mesas
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#" >Verificar</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Alterar</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Adicionar</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Excluir </a></li>
                </ul>
              </li>
            </ul>
            <ul class="nav">
                <li class="nav-item">
                    <a class="text-white nav-link " href="php/sair.php" tabindex="-1" >Sair</a>
                  </li>
            </ul>
          </div>
        </div>
      </nav>
<br><br><br>
<?php
include('php/listarCategorias.php')
?>
<form method="POST" action="php/salvaProduto.php">
        <div>
            <label for="iNome">Nome: </label>
            <input type="text" id="iNome" name="nName">
        </div>
        <p>
        <div>          
            <label for="iQtd">Disponibilidade: </label>
            <input type="text" id="iQtd" name="nQtd">
        <div>
            <label for="iNome">Descri????o: </label>
            <textarea name="nDesc"  cols="30" rows="10"></textarea>
        </div>
        <p>
        <div>          
            <label for="iPreco">Pre??o: </label>
            <input type="number" id="iPreco" name="nPreco" min="0.00" max="10000.00" step="0.01" />
        </div>
        <p>
        <div>
            <label for="iCategoria">Categoria: </label>
            <select name="nCategoria" id="iCategorias">
                <?php echo listarCategorias();  ?>
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
      <footer class="container-fluid d-flex flex-wrap justify-content-center align-items-center py-3 my-4 border-top" style="position:fixed;bottom:0;">
    <div class="col-md-2 d-flex align-items-center">
      <span class="text-center fw-bold ">?? 2021 projetinho </span>
    </div>
  </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>