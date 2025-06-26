<?php 

    // Requisitar arquivo listar
    require "Controller/Listar/listar_Projeto.php";
    require "Controller/Listar/listar_Parceiro.php";
    require "Controller/Listar/listar_Equipe.php";

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
            <button class="login-button">Login</button>
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
                                <a href="projetos.php" class="read-more" target="_blank">Veja mais <i class="fas fa-arrow-right"></i></a>
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
                <img src="https://via.placeholder.com/250x150/50346a/FFFFFF?text=Membro+1" alt="Membro da Equipe 1">
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

    <section id="contato">
        <footer class="footer">
            <div class="footer-left">
                <div class="logo">Futurize</div>
                <div class="social-icons">
                    <a href="https://www.instagram.com/gustavoguanabara/"><i class="fab fa-instagram"></i></a>
                    <a href="https://www.facebook.com/gustavoguanabara/?locale=pt_BR"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://www.youtube.com/cursoemvideo/playlists"><i class="fab fa-youtube"></i></a>
                    <a href="https://x.com/guanabara"><i class="fab fa-twitter"></i></a>
                </div>
                <p>&copy; 2024 Futurize. All right reserved</p>
            </div>
            <div class="footer-right">
                <h3>Sobre Nós</h3>
                <ul>
                    <li><a href="#">(11) 4002-8922</a></li>
                    <li><a href="#">Futurize@futurize.com</a></li>
                    <li><a href="#">Rua : Carlos de Carvalho, 200 </a></li>
                </ul>
            </div>
            <div class="footer-contact-form">
                <h3>Entre em contato</h3>
                <form action="processar_formulario.php" method="POST">
                    <input type="text" name="nome" placeholder="Seu Nome" required>
                    <input type="email" name="email" placeholder="Seu Email" required>
                    <textarea name="mensagem" placeholder="Sua Mensagem" rows="4" required></textarea>
                    <button type="submit">Enviar</button>
                </form>
            </div>
        </footer>
    </section>
</body>
</html>