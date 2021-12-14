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
            <img class="rounded-circle" src="img/logo2.0.jpeg" alt="logo da loja">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="p-3 mb-2 bg-dark text-white nav-link active" aria-current="page" href="administrativo.html">Nome Loja</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"></a>
              </li>
              <li class="nav-item dropdown">
                <a class="p-3 mb-2 bg-dark text-white nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Usuarios
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="verificar_usu.php">Verificar</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="adicionar_usu.php">Adicionar</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="excluir_usu.php">Excluir</a></li>
                </ul>
              </li>

              <li class="nav-item dropdown">
                <a class="p-3 mb-2 bg-dark text-white nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Produtos
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="verificar_pro.php">Verificar</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="adicionar_pro.php">Adicionar</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="excluir_pro.php">Excluir</a></li>
                </ul>
              </li>

              <li class="nav-item dropdown">
                <a class="p-3 mb-2 bg-dark text-white nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Mesas
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="verificar_mesas.php" >Verificar</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="alterar_mesas.php">Alterar</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="adicionar_mesas.php">Adicionar</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="excluir_mesas.php">Excluir </a></li>
                </ul>
              </li>
            </ul>
            <ul class="nav">
                <li class="nav-item">
                    <a class="text-white nav-link " href="sair.php" tabindex="-1" >Sair</a>
                  </li>
            </ul>
          </div>
        </div>
      </nav>
      <footer class="container-fluid d-flex flex-wrap justify-content-center align-items-center py-3 my-4 border-top" style="position:fixed;bottom:0;">
    <div class="col-md-2 d-flex align-items-center">
      <span class="text-center fw-bold ">© 2021 projetinho </span>
    </div>
  </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>