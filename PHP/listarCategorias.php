<?php


function listar_categorias(){

//Conexão ao BD
include("conexao.php");


    //Montar meu comando SQL
    $sql = "SELECT * FROM categorias;" ;    

    $result = mysqli_query($conn, $sql); 
    mysqli_close($conn);    

     $lista = "";
    //Valida se retornou linha
    if(mysqli_num_rows($result) > 0){       

            //Array para receber os $result
            $array = array();

            //Descarregar dados no array
            while($linha = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                //Gravação no array
                array_push($array,$linha);
            }

            //Validar dados 
            foreach($array as $campo){                    
                  $lista .= '<option value="'.$campo['id'].'">'.$campo['nome-categoria'].'</option>';
            }

        
    }

    return $lista; 
}

?>
