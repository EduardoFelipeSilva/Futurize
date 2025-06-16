<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FutuRize - Projetos</title>
    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <header class="navbar">
        <div class="logo">FutuRize</div>
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#" class="active">Projetos</a></li>
                <li><a href="#">Sobre nós</a></li>
                <li><a href="#">Parceiros</a></li>
                <li><a href="#">Contato</a></li>
            </ul>
        </nav>
        <div class="user-info">
            <i class="fab fa-bitcoin bitcoin-icon"></i>
            <span>Bem vindo, Fulano</span>
        </div>
    </header>

    <main class="container">
        <h1>Projetos</h1>

        <div class="search-section">
            <div class="add-button">
                <i class="fas fa-plus"></i>
            </div>
            <div class="search-box">
                <i class="fas fa-search"></i>
                <input type="text" placeholder="Buscar Projeto">
            </div>
        </div>

        <table class="projects-table">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>Nome</th>
                    <th>Preço de Tabela</th>
                    <th>Início</th>
                    <th>Término</th>
                    <th>Link</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>ZenEstoques</td>
                    <td>R$9.999,99</td>
                    <td>00/00/00</td>
                    <td>00/00/00</td>
                    <td>
                        <div class="action-buttons">
                            <button class="icon-button"><i class="fas fa-download"></i></button>
                            <button class="view-button">Ver Mais</button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>DataHora</td>
                    <td>R$9.999,99</td>
                    <td>00/00/00</td>
                    <td>00/00/00</td>
                    <td>
                        <div class="action-buttons">
                            <button class="icon-button"><i class="fas fa-download"></i></button>
                            <button class="view-button">Ver Mais</button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Lorem Ipsum</td>
                    <td>R$9.999,99</td>
                    <td>00/00/00</td>
                    <td>00/00/00</td>
                    <td>
                        <div class="action-buttons">
                            <button class="icon-button"><i class="fas fa-download"></i></button>
                            <button class="view-button">Ver Mais</button>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </main>
</body>
</html>