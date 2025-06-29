<?php 

    // Requisitar arquivo listar
    require "listar_Projeto.php";
    require "listar_Parceiro.php";
    require "listar_Equipe.php";

    

        //Comando em SQL para listar projetos
    $sql_listarProjetos = "SELECT * FROM projeto";

    //Conecta ao BD e executar o comando em SQL
    $consultaProjetos_bd = mysqli_query($conexao, $sql_listarProjetos);


        //Comando em SQL para listar parceiros
    $sql_listarParceiro = "SELECT * FROM parceiro";


    $consultaParceiro_bd = mysqli_query($conexao, $sql_listarParceiro);


        //Comando em SQL para listar a Equipe
    $sql_listarEquipe = "SELECT * FROM usuario";


    $consultaEquipe_bd = mysqli_query($conexao, $sql_listarEquipe);


?>