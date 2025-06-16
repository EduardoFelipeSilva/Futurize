<?php 
    // require "Controller/Atualizar/atualizar_usuario.php";
    require "Controller/Atualizar/atualizar_projeto.php";
    // require "Controller/Atualizar/atualizar_parceiro.php";

    //     //Comando em SQL
    // $sql_listarUsuarios = "SELECT * FROM projeto";

    // //Conecta ao BD e executar o comando em SQL
    // $consultaUsuarios_bd = mysqli_query($conexao, $sql_listarUsuarios);


        //Comando em SQL
    $sql_listarProjetos = "SELECT * FROM projeto";

    //Conecta ao BD e executar o comando em SQL
    $consultaProjetos_bd = mysqli_query($conexao, $sql_listarProjetos);


    //     //Comando em SQL
    // $sql_listarParceiro = "SELECT * FROM sge_alunos";

    // //Conecta ao BD e executar o comando em SQL
    // $consultaParceiro_bd = mysqli_query($conexao, $sql_listarParceiro);
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
            <button class="cta-button">Saiba mais</button>
        </div>
    </header>

    <?php while($dadosProjetos_db = mysqli_fetch_assoc($consultaProjetos_bd)):?>

        <section id="projetos" class="section projetos-section">
            <h2>Nossos projetos</h2>
            <p class="section-description">Explore alguns projetos que nossa empresa esteve envolvida</p>
            <div class="cards-container">
                <div class="card">
                    <div class="icon-wrapper"><i class="fas fa-chart-line"></i></div>
                    <h3><?php echo $dadosProjetos_db['pjt_Nome']?></h3>
                    <p>Sistema focado em ajudar a aumentar a produtividade e a gerenciar informações</p>
                    <a href="#" class="read-more">Veja mais <i class="fas fa-arrow-right"></i></a>
                </div>
                <div class="card">
                    <div class="icon-wrapper"><i class="fas fa-check-circle"></i></div>
                    <h3>HoraCerta</h3>
                    <p>Sistema para planejar e gerenciar horários em uma agenda interativa</p>
                    <a href="#" class="read-more">Veja mais <i class="fas fa-arrow-right"></i></a>
                </div>
                <div class="card">
                    <div class="icon-wrapper"><i class="fab fa-bitcoin"></i></div>
                    <h3>BitX</h3>
                    <p>Sistema de Gerenciamento Escolar</p>
                    <a href="#" class="read-more">Veja mais <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </section>

    <?php endwhile; ?>

    <section id="parceiros" class="section parceiros-section">
        <h2>Parceiros</h2>
        <p class="section-description">Trabalhamos com diversas empresas para garantir o melhor para seu projeto</p>
        <div class="parceiros-content">
            <div class="parceiro-intro">
                </div>
            <div class="parceiros-list">
                <div class="parceiro-card">
                    <div class="icon-wrapper"><i class="fas fa-user-tie"></i></div>
                    <div class="parceiro-info">
                        <h3>Equipe parceiro #</h3>
                        <p>Resumo da empresa e área de atuação</p>
                    </div>
                </div>
                <div class="parceiro-card">
                    <div class="icon-wrapper"><i class="fas fa-briefcase"></i></div>
                    <div class="parceiro-info">
                        <h3>Equipe Parceira 2</h3>
                        <p>Resumo da empresa e área de atuação</p>
                    </div>
                </div>
                <div class="parceiro-card">
                    <div class="icon-wrapper"><i class="fas fa-users"></i></div>
                    <div class="parceiro-info">
                        <h3>Equipe Parceira 3</h3>
                        <p>Resumo da empresa e área de atuação</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="equipe" class="section equipe-section">
        <h2>A Equipe</h2>
        <p class="section-description">Conheça um pouco de nossos membros</p>
        <div class="cards-container">
            <div class="team-member-card">
                <img src="https://via.placeholder.com/250x150/50346a/FFFFFF?text=Membro+1" alt="Membro da Equipe 1">
                <h3>André Rodrigues</h3>
                <p>Position One</p>
                <p class="member-role">Resumo dos trabalhos</p>
            </div>
            <div class="team-member-card">
                <img src="https://via.placeholder.com/250x150/50346a/FFFFFF?text=Membro+2" alt="Membro da Equipe 2">
                <h3>Pedro Santos</h3>
                <p>Position Two</p>
                <p class="member-role">Resumo dos trabalhos</p>
            </div>
            <div class="team-member-card">
                <img src="https://via.placeholder.com/250x150/50346a/FFFFFF?text=Membro+3" alt="Membro da Equipe 3">
                <h3>João Carlos</h3>
                <p>Position Three</p>
                <p class="member-role">Resumo dos trabalhos</p>
            </div>
            <div class="team-member-card">
                <img src="https://via.placeholder.com/250x150/50346a/FFFFFF?text=Membro+4" alt="Membro da Equipe 4">
                <h3>Raquel Oliveira</h3>
                <p>Position Four</p>
                <p class="member-role">Resumo dos trabalhos</p>
            </div>
        </div>
    </section>

    <footer class="footer">
        <div class="footer-left">
            <div class="logo">Futurize</div>
            <div class="social-icons">
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-youtube"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
            </div>
            <p>&copy; 2024 Futurize. All right reserved</p>
        </div>
        <div class="footer-right">
            <h3>Sobre Nós</h3>
            <ul>
                <li><a href="#">Telefone</a></li>
                <li><a href="#">Email</a></li>
                <li><a href="#">Endereço</a></li>
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
</body>
</html>