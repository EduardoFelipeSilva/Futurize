<?php
    require "Controller/sessao.php";
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DashBoard - Usuarios</title>
    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <?php include "navbar_logado.php";
        require "Controller/Listar/listar_Tudo.php";
        include "Controller/ordena/usuario.php";
    ?>
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
                <a href="form_cadas_usuario.php"><i class="fas fa-plus"></i></a>
            </div>
            <form method="GET" class="search-box">
                <i class="fas fa-search"></i>
                <input type="text" name="buscaUsuario" placeholder="Buscar Usuario" value="<?php echo isset($_GET['buscaUsuario']) ? htmlspecialchars($_GET['buscaUsuario']) : ''; ?>">
            </form>
        </div>

        <table class="projects-table">
            <thead>
                <tr>
                    <th><a href="?ordenarPor=usr_Id&ordem=<?php echo ($ordenarPor === 'usr_Id' && $ordem === 'ASC') ? 'DESC' : 'ASC'; ?>">Nº</a></th>
                    <th><a href="?ordenarPor=usr_Nome&ordem=<?php echo ($ordenarPor === 'usr_Nome' && $ordem === 'ASC') ? 'DESC' : 'ASC'; ?>">Nome</a></th>
                    <th><a href="?ordenarPor=usr_Area&ordem=<?php echo ($ordenarPor === 'usr_Area' && $ordem === 'ASC') ? 'DESC' : 'ASC'; ?>">Área</a></th>
                    <th><a href="?ordenarPor=usr_Nivel&ordem=<?php echo ($ordenarPor === 'usr_Nivel' && $ordem === 'ASC') ? 'DESC' : 'ASC'; ?>">Acesso</a></th>
                    <th><a href="?ordenarPor=usr_Status&ordem=<?php echo ($ordenarPor === 'usr_Status' && $ordem === 'ASC') ? 'DESC' : 'ASC'; ?>">Status</a></th>
                    <th>Ações</th>
                </tr>
            </thead>
            <?php
                $contador = 0;

                if ($consultaUsuarios_bd && mysqli_num_rows($consultaUsuarios_bd) > 0):
            ?>
            <tbody>
                    <?php while(($dadosUsuarios_db = mysqli_fetch_assoc($consultaUsuarios_bd)) && $contador < 10): 
                        $contador++;
                    ?>
                <tr>
                    <td><?php echo $dadosUsuarios_db['usr_Id']; ?></td>
                    <td><?php echo $dadosUsuarios_db['usr_Nome']; ?></td>
                    <td><?php echo $dadosUsuarios_db['usr_Area']; ?></td>
                    <td><?php echo $dadosUsuarios_db['usr_Nivel']; ?></td>
                    <td><?php echo $dadosUsuarios_db['usr_Status']; ?></td>
                    <td>
                        <div class="action-buttons">
                            <a href="atualizar_usuario.php?usr_Id=<?php echo $dadosUsuarios_db['usr_Id']?>"
                            title="Atualizar" class="icon-action">
                            <i class="fas fa-edit"></i>
                            </a>

                            <a href="Controller/Deletar/deletar_usuario.php?usr_Id=<?php echo $dadosUsuarios_db['usr_Id']?>"
                            title="Excluir" class="icon-action delete"
                            onclick="return confirm('Tem certeza que deseja excluir este usuário?');">
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