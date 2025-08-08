<?php
    session_start();

    // Verifica se o admin está logado
    if (!isset($_SESSION['admin']) || $_SESSION['admin']['perfil'] != 2) {
        // Redireciona para a página principal se não for admin
        header("Location: index.php");
        exit();
    }
?>