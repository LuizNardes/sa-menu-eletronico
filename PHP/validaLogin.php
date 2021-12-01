<?php

    //Recebendo os campos postados pelo form
    $login = addslashes($_POST["nLogin"]);
    $senha = addslashes($_POST["nSenha"]);
    
    //CHAMADA DE FUNÇÃO: Validar se possui acesso

    $id = validaAcesso($login,$senha);

    var_dump($id);
    die();

    
    //DECLARAÇÃO DE FUNÇÃO
    
    function validaAcesso($l,$s){

        //Conexão ao BD
        include("conexao.php");

        //Validar se o usuário existe
        $sql = "SELECT id FROM usuarios "
            ." WHERE login = '".$l."'"
            ." AND senha = '".$s."' ;" ;
            
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);

        $idUsuario = 0;

        //Valida se retornou linha
        if(mysqli_num_rows($result) > 0){

            //Array para receber os $result
            $arrayLogin = array();

            //Descarregar dados no array
            while($linha = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                //Gravação no array
                array_push($arrayLogin,$linha);
            }
            
            return $achou;

            //Validar dados 
            foreach($arrayLogin as $campo){                    
                $idUsuario = $campo['id'];
            }

            return $idUsuario; 
           
        }
    } 

    /*
        //Valida se retornou linha
        if (mysqli_num_rows($result) >0) {
            //ACHOU
            $achou = true;
        }else{
            //NÃO ACHOU
            $achou = false;
        }
        
        return $achou;

    }
    */
         
?>