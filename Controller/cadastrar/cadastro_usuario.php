<?php
    include "../database.php";

    $usr_foto = $_POST ['usr_Foto'];
    $usr_Nome = $_POST ['usr_Nome'];
    $usr_Git = $_POST ['usr_Git'];
    $usr_Link = $_POST ['usr_Link'];
    $usr_Area = $_POST ['usr_Area'];
    $usr_Inst = $_POST ['usr_Inst'];
    $usr_Senha = $_POST ['usr_Senha'];
    $usr_Email = $POST ['usr_Email'];
    $usr_Cpf = $_POST ['usr_Cpf'];
    $usr_Sexo = $_POST ['usr_Sexo'];
    $usr_Logradouro = $_POST ['usr_Logradouro'];
    $usr_NumeroLogr = $_POST ['usr_NumeroLogra'];
    $usr_Cidade = $_POST ['usr_Cidade'];
    $usr_Status = $_POST ['usr_Status'];
    $usr_Nivel = $_POST ['usr_Nivel'];

    $sql = "INSERT INTO futurize (usr_Foto, usr_Nome, usr_Git, usr_Link, usr_Area, usr_Inst, usr_Senha, usr_Email, usr_Cpf,
                                usr_Sexo, usr_Logradouro, usr_NumeroLogra, usr_Cidade, usr_Status, usr_Nivel) VALUES ($usr_Foto, $usr_Nome, $usr_Git, $usr_Link, $usr_Area,
                                $usr_Inst, $usr_Senha, $usr_Email, $usr_Cpf, $usr_Sexo, $usr_Logradouro, $usr_NumeroLogra, $usr_Cidade, $usr_Status, $usr_Nivel)";

    if(mysqli_query($conexao,$sql))
    {
        echo "Cadastro realizado com sucesso";
        header("location:praverainda.php");
    }

    else
    {
        echo "Falha ao realizar o Cadastro";

    }
?>


