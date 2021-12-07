<?php

//Variáveis: dados trazidos da tela de consulta 
$name = $_POST["nName"];
$id = $_POST["nId"];
$tipo = $_POST["nTipo"];



        //Conexão ao BD
        include("conexao.php");
    
        if($tipo == 0){
                $whereTIPO = "";
        }else{
                $whereTIPO = " AND tipo_usuario = ".$tipo;
        }
        
        if($name == ""){
                $whereNOME = "";
        }else{
                $whereNOME = " AND nome LIKE '%".$nome."%' ";
        }
        
        if($id == 0){
                $whereID = "";
        }else{
                $whereID = " AND id = ".$id;
        }
        

        //Montar meu comando SQL
        $sql = "SELECT * FROM usuarios WHERE 1=1" 
        .$whereTIPO
        .$whereNOME
        .$whereID;     
        
  

        $result = mysqli_query($conn, $sql); 
        mysqli_close($conn);    
        
        
        

         $lista = "<table border=1>"
         ."<tread><tr><th>ID</th><th>NOME</th>"
         ."<th>TIPO USUÁRIO</th>"
         ."<th>AÇÕES</th></tr><tread>";


        //Valida se retornou linha
        if(mysqli_num_rows($result) > 0){       
    
                //Array para receber os $result
                $array = array();
    
               
               
                //Descarregar dados no array
                 while($linha = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                //Gravação no array
                array_push($array,$linha);
                }
                
                include('listarTipoUserByID.php');

                
                //Validar dados 
                foreach($array as $campo){                    
                      

                $lista .= "<tr><td>".$campo['id'] 
                . "</td> <td> " . $campo['nome'] 
                . "</td><td>" . descricaoUserByID($campo['tipo_usuario']) 
                . "</td><td>"
                ."<a href='../alteraUser.php?id=".$campo['id']."' >Alterar</a> "
                ."</td></tr>";

                }
               $lista .= "</table>";
        }
    
        echo $lista; 
 ?>  