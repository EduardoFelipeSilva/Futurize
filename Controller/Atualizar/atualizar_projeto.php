<?php

    include_once "C:\\xampp\htdocs\Futurize\Controller\database.php";

    $pjt_Id = $_POST['pjt_Id'];
    $pjt_Nome = $_POST['pjt_Nome'];
    $pjt_Foto = $_POST['pjt_Foto'];
    $pjt_Resumo = $_POST['pjt_Resumo'];
    $pjt_DataInicio = $_POST['pjt_DataInicio'];
    $pjt_pjt_DataTermino = $_POST['pjt_DataTermino'];
    $pjt_Preco = $_POST['pjt_Preco'];
    $pjt_Site = $_POST['pjt_Site'];
    $pjt_Status = $_POST['pjt_Status'];

    //Declarar e realizar a instrução em SQL
    $sql_update = "UPDATE projeto SET pjt_Nome = '$pjt_Nome', pjt_Foto = '$pjt_Foto', pjt_Resumo = '$pjt_Resumo', pjt_DataInicio = '$pjt_DataInicio', 
    pjt_pjt_DataTermino = '$pjt_pjt_DataTermino', pjt_Preco = '$pjt_Preco',  pjt_Site = '$pjt_Site', pjt_Status = '$pjt_Status'
    WHERE pojeto.pjt_Id = '$pjt_Id'";

    echo $sql_update;

    //Função para conectar os banco de daods e enviar as informações
    if(mysqli_query($conexao,$sql_update))
    { //comando em SQL e Conexão com o banco de dados
        echo "Atualização realizada com sucesso";
        header("location:Praverainda.php");
    }else
    {
        echo "Falha ao realizar a atualização";
    }