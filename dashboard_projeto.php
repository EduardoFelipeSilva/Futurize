<?php
    require "Controller/sessao.php";
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DashBoard - Projetos</title>
    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <?php include "navbar_logado.php";
        require "Controller/Listar/listar_Tudo.php";
        include "Controller/ordena/projeto.php";?>
        
    <?php if (isset($_GET['atualizado']) && $_GET['atualizado'] == 1): ?>
        <script>
            alert("Projeto atualizado com sucesso!");
        </script>
    <?php endif; ?>
    <br>
    <br>


    <main class="container">
        <div class="nav-buttons">
            <a href="dashboard_projeto.php"
            class="nav-btn <?php echo basename($_SERVER['PHP_SELF']) === 'dashboard_projeto.php' ? 'active' : ''; ?>">
            Projetos
            </a>
            <a href="dashboard_parceiro.php"
            class="nav-btn <?php echo basename($_SERVER['PHP_SELF']) === 'dashboard_parceiro.php' ? 'active' : ''; ?>">
            Parceiros
            </a>
            <a href="dashboard_usuario.php"
            class="nav-btn <?php echo basename($_SERVER['PHP_SELF']) === 'dashboard_usuario.php' ? 'active' : ''; ?>">
            Usuários
            </a>
        </div>


        <div class="search-section">
            <div class="add-button">
                <a href="form_cadas_projetos.php"><i class="fas fa-plus"></i></a>
            </div>
            <form method="GET" class="search-box">
                <i class="fas fa-search"></i>
                <input type="text" name="buscaProjeto" placeholder="Buscar Projeto" value="<?php echo isset($_GET['buscaProjeto']) ? htmlspecialchars($_GET['buscaProjeto']) : ''; ?>">
            </form>
        </div>

        <table class="projects-table">
            <thead>
                <tr>
                    <th><a href="?ordenarPor=pjt_Id&ordem=<?php echo ($ordenarPor === 'pjt_Id' && $ordem === 'ASC') ? 'DESC' : 'ASC'; ?>">Nº</a></th>
                    <th>Nome</th>
                    <th><a href="?ordenarPor=pjt_Preco&ordem=<?php echo ($ordenarPor === 'pjt_Preco' && $ordem === 'ASC') ? 'DESC' : 'ASC'; ?>">Preço</a></th>
                    <th><a href="?ordenarPor=pjt_DataInicio&ordem=<?php echo ($ordenarPor === 'pjt_DataInicio' && $ordem === 'ASC') ? 'DESC' : 'ASC'; ?>">Início</a></th>
                    <th><a href="?ordenarPor=pjt_DataTermino&ordem=<?php echo ($ordenarPor === 'pjt_DataTermino' && $ordem === 'ASC') ? 'DESC' : 'ASC'; ?>">Término</a></th>
                    <th><a href="?ordenarPor=pjt_Status&ordem=<?php echo ($ordenarPor === 'pjt_Status' && $ordem === 'ASC') ? 'DESC' : 'ASC'; ?>">Status</a></th>
                    <th>Ações</th>
                </tr>
            </thead>
            <?php
                $contador = 0;

                if ($consultaProjetos_bd && mysqli_num_rows($consultaProjetos_bd) > 0):
            ?>
            <tbody>
                    <?php while(($dadosProjetos_db = mysqli_fetch_assoc($consultaProjetos_bd)) && $contador < 10): 
                        $contador++;
                    ?>
                <tr>
                    <td><?php echo $dadosProjetos_db['pjt_Id']; ?></td>
                    <td><?php echo $dadosProjetos_db['pjt_Nome']; ?></td>
                    <td><?php echo $dadosProjetos_db['pjt_Preco']; ?></td>
                    <td><?php echo date('d/m/Y', strtotime($dadosProjetos_db['pjt_DataInicio'])); ?></td>
                    <td><?php echo date('d/m/Y', strtotime($dadosProjetos_db['pjt_DataTermino'])); ?></td>
                    <td><?php echo $dadosProjetos_db['pjt_Status']; ?></td>
                    <td>
                        <div class="action-buttons">
                            <a href="atualizar_projeto.php?pjt_Id=<?php echo $dadosProjetos_db['pjt_Id']?>"
                            title="Atualizar" class="icon-action">
                            <i class="fas fa-edit"></i>
                            </a>

                            <a href="Controller/Deletar/deletar_projeto.php?pjt_Id=<?php echo $dadosProjetos_db['pjt_Id']?>"
                            title="Excluir" class="icon-action delete"
                            onclick="return confirm('Tem certeza que deseja excluir este Projeto?');">
                            <i class="fas fa-trash-alt"></i>
                            </a>
                        </div>
                    </td>
                </tr>
                    <?php endwhile; ?>
            <?php
                else:
                    echo "<p style='text-align:center; color: red;'>Erro ao buscar os projetos ou nenhum projeto encontrado.</p>";
                endif;
            ?>

                
            </tbody>
        </table>
    </main>

</body>
</html>