<?php

    include "../database.php";

    $usr_Id = $_POST['usr_Id'];
    $usr_Foto = $_POST['usr_Foto'];
    $usr_Nome = $_POST['usr_Nome'];
    $usr_Git = $_POST['usr_Git'];
    $usr_Link = $_POST['usr_Link'];
    $usr_Area = $_POST['usr_Area'];
    $usr_Inst = $_POST['usr_Inst'];
    $usr_Senha = $_POST['usr_Senha'];
    $usr_Email = $_POST['usr_Email'];
    $usr_Cpf = $_POST['usr_Cpf'];
    $usr_Sexo = $_POST['usr_Sexo'];
    $usr_Logradouro = $_POST['usr_Logradouro'];
    $usr_NumeroLogra = $_POST['usr_NumeroLogra'];
    $usr_Cidade = $_POST['usr_Cidade'];
    $usr_Status = $_POST['usr_Status'];
    $usr_Nivel = $_POST['usr_Nivel'];

    //Declarar e realizar a instrução em SQL
    $sql_update = "UPDATE usuario SET usr_Foto = '$usr_Foto', usr_Nome = '$usr_Nome', usr_Git = '$usr_Git', usr_Link = '$usr_Link', usr_Area = '$usr_Area',
    usr_Inst = '$usr_Inst', usr_Senha = '$usr_Senha', usr_Email = '$usr_Email', usr_Cpf = '$usr_Cpf', usr_Sexo = '$usr_Sexo',
    usr_Logradouro = '$usr_Logradouro', usr_NumeroLogr = '$usr_NumeroLogr', usr_Cidade = '$usr_Cidade', usr_Status = '$usr_Status', usr_Nivel = '$usr_Nivel'
    WHERE usuario.usr_Id = '$usr_Id'";

    echo $sql_update;

    //Função para conectar os banco de daods e enviar as informações
    if(mysqli_query($conexao,$sql_update))
    { //comando em SQL e Conexão com o banco de dados
        header("Location: ../../dashboard_usuario.php?atualizado=1");
        exit;
    }else
    {
        echo "Falha ao realizar a atualização";
    }