<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Futurize - Novo Projeto</title>
    <link rel="stylesheet" href="css/cadastrar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <header class="header-internal">
        <nav class="navbar">
            <div class="logo">Futurize</div>
            <ul class="nav-links">
                <li><a href="index.html">Home</a></li>
                <li><a href="projetos.html" class="active">Projetos</a></li>
                <li><a href="sobre-nos.html">Sobre nós</a></li>
                <li><a href="#">Parceiros</a></li>
                <li><a href="#">Contato</a></li>
            </ul>
            <div class="user-info">
                <i class="fab fa-bitcoin"></i> <span>Bem vindo, Fulano</span>
            </div>
        </nav>
    </header>

    <main class="main-content-form">
        <section id="novo-projeto" class="section new-project-section">
            <h2>Novo Projeto</h2>
            <form action="processar_projeto.php" method="POST" class="project-form">
                <div class="form-row">
                    <input type="text" id="nome-projeto" name="nome_projeto" placeholder="Nome" required>
                    <input type="text" id="preco-projeto" name="preco_projeto" placeholder="Preço" required>
                </div>
                <input type="date" id="data-inicio" name="data_inicio" placeholder="Data de Início" required>
                <input type="date" id="data-termino" name="data_termino" placeholder="Data de Término" required>
                <input type="url" id="url-foto" name="url_foto" placeholder="URL da foto">
                <input type="url" id="url-projeto" name="url_projeto" placeholder="URL do Projeto">
                <textarea id="resumo-projeto" name="resumo_projeto" placeholder="Resumo" rows="5"></textarea>

                <button type="submit" class="submit-button">Cadastrar</button>
            </form>
        </section>
    </main>

    <footer class="footer">
        <div class="footer-left">
            <div class="logo">Futurize</div>
            <div class="social-icons">
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-youtube"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
            </div>
            <p>&copy; 2025 Futurize. All right reserved</p>
        </div>
        <div class="footer-right">
            <h3>Sobre Nós</h3>
            <ul>
                <li><a href="#">Telefone</a></li>
                <li><a href="#">Email</a></li>
                <li><a href="#">Endereço</a></li>
            </ul>
        </div>
    </footer>
</body>
</html>