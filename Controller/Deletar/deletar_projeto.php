<?php

    
    include "../database.php";

    
    $pjt_Id = $_GET['pjt_Id'];

    
    $sql_excluir = "DELETE FROM projeto WHERE pojeto.pjt_Id = '$pjt_Id'";

    if(mysqli_query($conexao,$sql_excluir))
    { 
        echo "Exclusão realizada com sucesso";
        header("location:listar_cadastro.php");
    }else
    {
        echo "Falha ao excluir o cadastro";
    }
?>