<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="css/navbar.css">
</head>
<body>
    <header class="hero">
        <nav class="navbar">
            <div class="logo">Futurize</div>
            <?php
            $currentPage = basename($_SERVER['PHP_SELF']);
            $isIndex = $currentPage === "index.php";
            ?>

            <ul class="nav-links">
                <li><a href="<?php echo $isIndex ? '#home' : 'index.php#home'; ?>">Home</a></li>
                <li><a href="<?php echo $isIndex ? '#projetos' : 'index.php#projetos'; ?>">Projetos</a></li>
                <li><a href="<?php echo $isIndex ? '#equipe' : 'index.php#equipe'; ?>">Sobre nós</a></li>
                <li><a href="<?php echo $isIndex ? '#parceiros' : 'index.php#parceiros'; ?>">Parceiros</a></li>
                <li><a href="<?php echo $isIndex ? '#contato' : 'index.php#contato'; ?>">Contato</a></li>
            </ul>

            <a href="form_login.php"><button class="login-button">Login</button></a>
        </nav>
    </header>