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
            <img class="rounded-circle" src="../img/logo2.0.jpeg" alt="logo da loja">
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
                  <li><a class="dropdown-item" href="../usuarios/verificar_usu.php">Verificar</a></li>
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
                  <li><a class="dropdown-item" href="#">Verificar</a></li>
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
<br><br><br>
<form action="#" method="GET">
        <div class="container-fluid d-flex justify-content-center">
            <div class="row gx-5">
                  <div class="col-3 text-center">
                      <label for="iId">ID</label>
                      <input class="form-control " type="text" name="vId" id="iId" placeholder="Numero ID">
                  </div>
                  <div class="col-3 text-center">
                      <label for="iName">Nome</label>
                      <input class="form-control " type="text" name="vName" id="iName" placeholder="Hamburguer">
                  </div>
                  <div class="col-3 text-center">
                      <label for="iTipo">Tipo</label>
                      <select class="form-select" name="vTipo" id="iTipo">
                        <option value="">Tipo</option>
                        <option value="1">Lanches</option>
                        <option value="2">Porções</option>
                        <option value="3">Sobremesas</option>
                        <option value="4">Bebidas</option>
                      </select>
                      
                  </div>
                  <div class="col-3 p-4">
                      <button class="btn bg-dark text-white " href="">Consultar</button>
                  </div>
                 
            <div class="table-responsive">
            
            <table class='table table-dark' style="margin-top:10vh;">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Quantidade</th>
            <th>Preço</th>
            <th>Categorias</th>
        </tr>
    


<?php
$whereId = "";
$whereName = "";
$whereTipo = "";

if(isset($_GET['vName']) or isset($_GET['vId'])){

        include 'php/conexao.php';
        

        if ($_GET['vId'] != "") {

          $whereId = " AND produtos.id = ".$_GET['vId'];

        }

      if ($_GET['vName'] != "")  {

  
          $whereName = " AND produtos.nome LIKE '%".$_GET['vName']."%' ";

      }
      
      if ($_GET['vTipo'] != "") {

          $whereTipo = " AND produtos.id_categoria = ".$_GET['vTipo'];
      
      }


      
      $sql = "SELECT * FROM produtos 
      INNER JOIN categorias 
      ON (categorias.id = produtos.id_categoria) 
      WHERE 1 = 1 "
      .$whereId
      .$whereName
      .$whereTipo;
        
      var_dump($sql);
        
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);

        if(mysqli_num_rows($result) > 0){
            $array = [];

            while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
            array_push($array,$row);
            }

            foreach($array as $row){
              switch ($row['categorias_id']) {
                case 1:
                    $tipo = "Lanches";
                    break;
                case 2:
                    $tipo = "Porções";
                    break;
                case 3:
                    $tipo = "Sobremesas";
                    break;
                case 4:
                    $tipo = "Bebidas";
                    break;
              }

            echo "<tr>
                    <th>". $row['id'] ."</th>
                    <th>". $row['nome'] ."</th>
                    <th>". $row['qtd'] ."</th>
                    <th>". $row['preco'] ."</th>
                    <th>". $tipo ."</th>
                </tr>";
            }
        }else{
            echo "
            <tr>
                <th>Sem dados</th>
                <th>Sem dados</th>
                <th>Sem dados</th>
                <th>Sem dados</th>
                <th>Sem dados</th>
            </tr>";
        }
      }
   else{

        $sql = "SELECT * FROM produtos;";
    
    
        include 'php/conexao.php';
    
        $result = mysqli_query($conn, $sql);
            mysqli_close($conn);
    
            if(mysqli_num_rows($result) > 0){
                $array = [];
    
                while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
                array_push($array,$row);
                }
    
                foreach($array as $row){
                  switch ($row['categorias_id']) {
                    case 1:
                        $tipo = "Lanches";
                        break;
                    case 2:
                        $tipo = "Porções";
                        break;
                    case 3:
                        $tipo = "Sobremesas";
                        break;
                    case 4:
                        $tipo = "Bebidas";
                        break;
                  }
    
                echo "<tr>
                        <th>". $row['id'] ."</th>
                        <th>". $row['nome'] ."</th>
                        <th>". $row['qtd'] ."</th>
                        <th>". $row['preco'] ."</th>
                        <th>". $tipo ."</th>
                    </tr>";
                }
            }else{
                echo "
                <tr>
                    <th>Sem dados</th>
                    <th>Sem dados</th>
                    <th>Sem dados</th>
                    <th>Sem dados</th>
                    <th>Sem dados</th>
                </tr>";
            }
    
    }

?>

</table>


            </div>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>