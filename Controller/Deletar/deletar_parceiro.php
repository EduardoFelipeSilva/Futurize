<?php

    
    include "../database.php";

    
    $pco_Id = $_GET['pco_Id'];

    
    $sql_excluir = "DELETE FROM parceiro WHERE parceiro.pco_Id = '$pco_Id'";

    if(mysqli_query($conexao,$sql_excluir))
    { 
        echo "Exclusão realizada com sucesso";
        header("location:PraVerainda.php");
    }else
    {
        echo "Falha ao excluir o cadastro";
    }
?>