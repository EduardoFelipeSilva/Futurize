<?php 
    require "Controller/Listar/listar_Tudo.php";
    require "Controller/sessao.php";
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Futurize</title>
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <header class="hero">
        <nav class="navbar">
            <div class="logo">Futurize</div>
            <ul class="nav-links">
                <li><a href="#home">Home</a></li>
                <li><a href="#projetos">Projetos</a></li>
                <li><a href="#equipe">Sobre nós</a></li>
                <li><a href="#parceiros">Parceiros</a></li>
                <li><a href="#contato">Contato</a></li>
            </ul>
            <?php if (isset($_SESSION['admin']) || isset($_SESSION['usuario'])): ?>
                <div class="user-menu">
                    <span class="user-name">
                        Olá, <?php echo $_SESSION['admin']['login'] ?? $_SESSION['usuario']['login']; ?>
                    </span>
                    <a href="Controller/logout.php" class="logout-button">Sair</a>
                </div>
            <?php else: ?>
                <a href="form_login.php"><button class="login-button">Login</button></a>
            <?php endif; ?>

        </nav>
        <div class="hero-content">
            <h1>Venha fazer seu futuro conosco</h1>
            <p>Projetos com as tecnologias mais inovadoras do mercado seu projeto com um toque de futuro</p>
            <a href="about.php"><button class="cta-button">Saiba mais</button></a>
        </div>
    </header>

    <?php
        $contador = 0;

        if ($consultaProjetos_bd && mysqli_num_rows($consultaProjetos_bd) > 0):
        ?>
            <section id="projetos" class="section projetos-section">
                <h2>Nossos projetos</h2>
                <p class="section-description">Explore alguns projetos que nossa empresa esteve envolvida</p>
                
                <div class="cards-scroll-wrapper">
                    <div class="cards-container-horizontal">
                        <?php while(($dadosProjetos_db = mysqli_fetch_assoc($consultaProjetos_bd)) && $contador < 10): 
                            $contador++;
                        ?>
                            <div class="card">
                            <div class="image-projeto">
                                <img src="<?php echo $dadosProjetos_db['pjt_Foto']; ?>" alt="<?php echo $dadosProjetos_db['pjt_Nome']; ?>">
                            </div>

                                <h3><?php echo $dadosProjetos_db['pjt_Nome']; ?></h3>
                                <p><?php echo $dadosProjetos_db['pjt_Resumo']; ?></p>
                                <p><?php echo $dadosProjetos_db['pjt_Status']; ?></p>
                                <a href="projetos.php?pjt_Id=<?php echo $dadosProjetos_db['pjt_Id']?>" class="read-more" target="_blank">Veja mais <i class="fas fa-arrow-right"></i></a>
                            </div>
                        <?php endwhile; ?>
                    </div>
                </div>
            </section>
        <?php
        else:
            echo "<p style='text-align:center; color: red;'>Erro ao buscar os projetos ou nenhum projeto encontrado.</p>";
        endif;
    ?>

    <?php
    $contador = 0;

    if ($consultaParceiro_bd && mysqli_num_rows($consultaParceiro_bd) > 0):
    ?>

        <section id="parceiros" class="section parceiros-section">
            <h2>Parceiros</h2>
            <p class="section-description">Trabalhamos com diversas empresas para garantir o melhor para seu projeto</p>
            <div class="parceiros-content">


                    <?php while(($dadosParceiro_db = mysqli_fetch_assoc($consultaParceiro_bd)) && $contador < 4):
                        $contador++; 
                    ?>
                <div class="parceiros-list">
                <div class="parceiro-card <?php echo $contador % 2 === 0 ? 'right' : 'left'; ?>">
                        <div class="image-parceiro">
                            <img src="<?php echo $dadosParceiro_db['pco_Foto']; ?>" alt="<?php echo $dadosParceiro_db['pco_Nome']; ?>">
                        </div>

                        <div class="parceiro-info">
                            <h3><?php echo $dadosParceiro_db['pco_Nome']; ?></h3>
                            <p><?php echo $dadosParceiro_db['pco_Resumo']; ?></p>
                            <p><?php echo $dadosParceiro_db['pco_Area']; ?></p>
                            <a href="<?php echo $dadosParceiro_db['pco_Site']; ?>" class="read-more" target="_blank">Veja mais <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <?php endwhile; ?>
                </div>
            </div>
            
        </section>
        <?php
        else:
            echo "<p style='text-align:center; color: red;'>Erro ao buscar os projetos ou nenhum projeto encontrado.</p>";
        endif;
    ?>


    <?php
    if ($consultaEquipe_bd && mysqli_num_rows($consultaEquipe_bd) > 0):
    ?>
    <section id="equipe" class="section equipe-section">
        <h2>A Equipe</h2>
        <p class="section-description">Conheça um pouco de nossos membros</p>
        <div class="cards-container">
            <?php while(($dadosEquipe_db = mysqli_fetch_assoc($consultaEquipe_bd))):
            ?>
            <div class="team-member-card">
                <img src="<?php echo $dadosEquipe_db['usr_Foto']; ?>" alt="<?php echo $dadosEquipe_db['usr_Nome']; ?>">
                <h3><?php echo $dadosEquipe_db['usr_Nome']; ?></h3>
                <p><?php echo $dadosEquipe_db['usr_Area']; ?></p>
                <a href="<?php echo $dadosEquipe_db['usr_Git']; ?>" class="read-more" target="_blank">Link do portilho <i class="fas fa-arrow-right"></i></a>
            </div>
            <?php endwhile; ?>
        </div>
    </section>
    <?php
        else:
            echo "<p style='text-align:center; color: red;'>Erro ao buscar os projetos ou nenhum projeto encontrado.</p>";
        endif;
    ?>

        <?php include "footer.php" ?>
</body>
</html>