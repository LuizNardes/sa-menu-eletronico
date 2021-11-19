<?php

//Preencher OPTIONS do um select mostrando todas as mesas---------------------------------------------------------------------------------------------
function listar_mesas(){

    

    //Conexão ao BD
    include("conexao.php");


    //Montar meu comando SQL
    $sql = "SELECT * FROM mesas;" ;    

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
                  $lista .= '<option value="'.$campo['id'].'">Mesa'.$campo['id'].'</option>';
            }

        
    }

    return $lista; 
}

//Função para buscar descrição de categoria-----------------------------------------------------------------------------------
function descricaoCategoria($id){


    //Conexão ao BD
    include("conexao.php");


    //Montar meu comando SQL
    $sql = "SELECT * FROM categorias WHERE id_categoria = $id" ;    

    // var_dump($sql);
    // die();

    $result = mysqli_query($conn, $sql); 
    mysqli_close($conn);    

    $descricao ="";
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
                  $descricao = $campo['descricao'];
            }

        
    }

    return $descricao; 
}


?>