<?php

    
    include "../database.php";

    
    $usr_Id = $_GET['usr_Id'];

    
    $sql_excluir = "DELETE FROM usuario WHERE usuario.usr_Id = '$usr_Id'";

    if(mysqli_query($conexao,$sql_excluir))
    { 
        echo "Exclusão realizada com sucesso";
        header("location: ../../dashboard_usuario.php");
    }else
    {
        echo "Falha ao excluir o cadastro";
    }
?>