<?php 


    include_once __DIR__ . "/../database.php";

    //  //////////////////////// Declarar e realizar a instrução sql

        $sql_listar = "SELECT * FROM projeto";
        $consulta_bd = mysqli_query($conexao, $sql_listar);

        if(mysqli_query($conexao,$sql_listar))
        {

        }
        else
        {
        
        }

?>