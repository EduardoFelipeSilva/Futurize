<?php
    include "../database.php";

    $pjt_Nome = $_POST ['pjt_Nome'];
    $pjt_Foto = $_POST ['pjt_Foto'];
    $pjt_Resumo = $_POST ['pjt_Resumo'];
    $pjt_DataInicio = $_POST ['pjt_DataInicio'];
    $pjt_DataTermino = $_POST ['pjt_DataTermino'];
    $pjt_Preco = $_POST ['pjt_Preco'];
    $pjt_Site = $_POST ['pjt_Site'];
    $pjt_Status = $_POST ['pjt_Status'];

    $sql = "INSERT INTO projeto (pjt_Nome, pjt_Foto, pjt_Resumo, pjt_DataInicio, pjt_DataTermino, pjt_Preco, pjt_Site, pjt_Status) 
                        VALUE ('$pjt_Nome', '$pjt_Foto', '$pjt_Resumo', '$pjt_DataInicio', '$pjt_DataTermino', '$pjt_Preco', '$pjt_Site', '$pjt_Status')";

    if(mysqli_query($conexao,$sql))
    {
        echo "Cadastro realizado com sucesso";
        header("Location:../../index.php");
    }
    else
    {
        echo "Falha ao realizar o Cadastro";
        header("Location:../../form_cadas_projetos.php");

    }
?>
