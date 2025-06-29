
<?php

    include "../database.php";

    $pco_Id = $_POST['pco_Id'];
    $pco_Nome = $_POST['pco_Nome'];
    $pco_Foto = $_POST['pco_Foto'];
    $pco_Resumo = $_POST['pco_Resumo'];
    $pco_Area = $_POST['pco_Area'];
    $pco_Site = $_POST['pco_Site'];
    $pco_Status = $_POST['pco_Status'];

    //Declarar e realizar a instrução em SQL
    $sql_update = "UPDATE parceiro SET pco_Nome = '$pco_Nome', pco_Resumo = '$pco_Resumo', pco_Area = '$pco_Area', pco_Site = '$pco_Site', pco_Status = '$pco_Status'
    WHERE parceiro.pco_Id = '$parceiro_Id'";

    echo $sql_update;

    //Função para conectar os banco de daods e enviar as informações
    if(mysqli_query($conexao,$sql_update))
    { //comando em SQL e Conexão com o banco de dados
        header("Location: ../../dashboard_parceiro.php?atualizado=1");
        exit;
    }else
    {
        echo "Falha ao realizar a atualização";
    }