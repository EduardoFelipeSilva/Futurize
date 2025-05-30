<?php
    include "../database.php";

    $pco_Nome = $_POST ['pco_Nome'];
    $pco_Foto = $_POST ['pco_Foto'];
    $pco_Resumo = $_POST ['pco_Resumo'];
    $pco_Area = $_POST ['pco_Area'];
    $pco_Site = $_POST ['pco_Site'];
    $pco_Status = $_POST [pco_Status];

    $sql = "INSERT INTO futurize (pco_Nome, pco_Foto, pco_Resumo, pco_Area, pco_Site, pco_Status) 
                                VALUES ($pco_Nome, $pco_Foto, $pco_Resumo, $pco_Area, $pco_Site, $pco_Status)"

    if(mysqli_query($conexao,$sql))
    {
        echo "Cadastro realizado com sucesso";
        header("Location:praverainda.php");
    }
    else
    {
        echo "Falha ao realizar o Cadastro";

    }
?>
