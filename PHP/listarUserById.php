<?php

//Função para buscar nome do user -----------------------------------------------------------------------------------
function nomeUser($id){


    //Conexão ao BD
    include("conexao.php");


    //Montar meu comando SQL
    $sql = "SELECT * FROM usuarios WHERE id_user = $id" ;    

    // var_dump($sql);
    // die();

    $result = mysqli_query($conn, $sql); 
    mysqli_close($conn);    

    $nome ="";
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
                  $nome = $campo['nome'];
            }

        
    }

    return $nome; 
}







?>