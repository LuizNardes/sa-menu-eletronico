<?php
include('php/listarTipoUser.php')
?>  

<!doctype html>
<html lang="pt-br">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Menu</title>
  </head>
  <body >
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
                  <li><a class="dropdown-item" href="addUser.php">Adicionar</a></li>              
                </ul>
              </li>

              <li class="nav-item dropdown">
                <a class="p-3 mb-2 bg-dark text-white nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Produtos
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="listarProdutos.php">Verificar</a></li>
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
<form action="#" method="GET">
        <div class="container-fluid d-flex justify-content-center">
            <div class="row gx-5">
                  <div class="col-3 text-center">
                      <label for="iID">ID</label>
                      <input class="form-control " type="text" name="nID" id="iID">
                  </div>
                  <div class="col-3 text-center">
                      <label for="iName">Nome</label>
                      <input class="form-control " type="text" name="nName" id="iNome">
                  </div>
                  <div class="col-3 text-center">
                      <label for="iTipo">Tipo</label>
                      <select class="form-select" name="nTipo" id="iTipo">
                        <option value="">Tipo</option>
                        <?php echo descricaoUser(); ?>
                      </select>
                      
                  </div>
                  <div class="col-3 p-4">
                      <button class="btn bg-dark text-white" href="">Consultar</button>
            </div>
</form>
            <div class="table-responsive">
            
            <table class='table table-dark' style="margin-top:10vh;">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Tipo usuario</th>
            <th>Ações</th>
        </tr>
    


<?php

include('php/listarTipoUserByID.php');

$whereId = "";
$whereName = "";
$whereTipo = "";

if(isset($_GET['nName']) or isset($_GET['nID'])){

        include 'php/conexao.php';
        

        if ($_GET['nID'] != "") {

          $whereId = " AND usuarios.id = ".$_GET['nID'];

        }

      if ($_GET['nName'] != "")  {

  
          $whereName = " AND usuarios.nome LIKE '%".$_GET['nName']."%' ";

      }
      
      if ($_GET['nTipo'] != "") {

          $whereTipo = " AND usuarios.tipo_usuario = ".$_GET['nTipo'];
      
      }

     

      $sql = "SELECT * FROM usuarios 
      INNER JOIN tipo_usuario 
      ON (usuarios.id = tipo_usuario.id) 
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
      

            echo "<tr>
                    <th>". $row['id'] ."</th>
                    <th>". $row['nome'] ."</th>
                    <th>". descricaoUserByID($row['tipo_usuario']) ."</th>
                    <th><a href='php/deleteUser.php?id=".$row['id']."'>Excluir</a>" 
                    ." / <a href='alteraUser.php?id=".$row['id']."'>Alterar</a></th>
                </tr>";
            }
        }else{
            echo "
            <tr>
                <th>Sem dados</th>
                <th>Sem dados</th>
                <th>Sem dados</th>
                <th>Sem dados</th>
            </tr>";
        }
      }
   else{

        $sql = "SELECT * FROM usuarios INNER JOIN tipo_usuario ON (usuarios.tipo_usuario = tipo_usuario.id ) WHERE usuarios.nome LIKE '%"."%';";
    
       
    
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
                        <th>". descricaoUserByID($row['tipo_usuario']) ."</th>
                        <th><a href='php/deleteUser.php?id=".$row['id']."'>Excluir</a>"
                        ." / <a href='alteraUser.php?id=".$row['id']."'>Alterar</a></th></th>
                    </tr>";
                }
            }else{
                echo "
                <tr>
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