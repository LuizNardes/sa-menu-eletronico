<?php

//Função para buscar DESCRIÇÃO do user por ID -----------------------------------------------------------------------------------
//Função para buscar DESCRIÇÃO do user por ID -----------------------------------------------------------------------------------
function descricaoUserByID($id){


    //Conexão ao BD
    include("conexao.php");


    //Montar meu comando SQL
    $sql = "SELECT * FROM tipo_usuario WHERE id=$id";    

    // var_dump($sql);
    // die();

    $result = mysqli_query($conn, $sql); 
    mysqli_close($conn);    

    $tipo_user ="";
    //Valida se retornou linha
    if (mysqli_num_rows($result) > 0){       

            //Array para receber os $result
            $array = array();

            //Descarregar dados no array
            while($linha = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                //Gravação no array
                array_push($array,$linha);
            }

            //Validar dados 
            foreach($array as $campo){                    
                  $tipo_user = $campo['tipo'];
            }

        
    }

    return $tipo_user; 
}


?>
