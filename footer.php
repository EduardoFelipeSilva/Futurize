<?php 
    require "Controller/sessao.php";
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

            <?php if (isset($_SESSION['admin'])): ?>
                <div class="admin-links">
                    <h4>Administração</h4>
                    <ul>
                        <li><a href="dashboard_projeto.php">Dashboard</a></li>
                        <li><a href="form_cadas_projeto.php">Criar Projeto</a></li>
                        <li><a href="form_cadas_parceiro.php">Adicionar Parceiro</a></li>
                    </ul>
                </div>
            <?php endif; ?>
        </div>

        <div class="footer-right">
            <h3>Sobre Nós</h3>
            <ul>
                <li><a href="#">(11) 4002-8922</a></li>
                <li><a href="#">Futurize@futurize.com</a></li>
                <li><a href="#">Rua : Carlos de Carvalho, 200</a></li>
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
