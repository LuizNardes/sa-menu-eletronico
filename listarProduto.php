<?php

include('php/listarCategorias.php')

?>
<!doctype html>
<html lang="pt-br">
  <head>
  <!-- botao dos icones-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- css -->

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
                <a class="p-3 mb-2 bg-dark text-white nav-link active" aria-current="page" href="adm.php">Nome Loja</a>
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
                  <li><a class="dropdown-item" href="addUser.php">Adicionar</a></li>

                </ul>
              </li>

              <li class="nav-item dropdown">
                <a class="p-3 mb-2 bg-dark text-white nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Produtos
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="listarProduto.php">Verificar</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="addProduto.php">Adicionar</a></li>
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
                      <input class="form-control " type="text" name="vId" id="iId">
                  </div>
                  <div class="col-3 text-center">
                      <label for="iName">Nome</label>
                      <input class="form-control " type="text" name="vName" id="iName">
                  </div>
                  <div class="col-3 text-center">
                      <label for="iTipo">Tipo</label>
                      <select class="form-select" name="vTipo" id="iTipo">
                        <option value="">Tipo</option>
                        <?php echo listarCategorias(); ?>
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
            <th>Ações</th>
        </tr>
    


<?php

include('php/listarCategoriaByID.php');


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
        

        
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);

        
        
        if(mysqli_num_rows($result) != 0){
            $array = [];

            while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
            array_push($array,$row);
            }

            foreach($array as $row){
      

            echo "<tr>
                    <th>". $row['id'] ."</th>
                    <th>". $row['nome'] ."</th>
                    <th>". $row['qtd'] ."</th>
                    <th>". $row['preco'] ."</th>
                    <th>". descricaoCategoriaByID($row['id_categoria'])  ."</th>
                    <th> <a href='#', class='list-group-item list-group-item-action bg-transparent second-text fw-bold'>
                    <i class='fas fa-shopping-cart me-2'></i> Gestão</a></th>
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
              
    
                echo "<tr>
                        <th>". $row['id'] ."</th>
                        <th>". $row['nome'] ."</th>
                        <th>". $row['qtd'] ."</th>
                        <th>". $row['preco'] ."</th>
                        <th>". descricaoCategoriaByID($row['id_categoria']) ."</th>
                        <th><a href='php/deleteProduto.php?id=".$row['id']."'>Excluir</a></th>
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