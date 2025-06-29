<?php
    require "Controller/sessao.php";
    include_once "C:\\xampp\htdocs\Futurize\Controller\database.php";

    // Verifica se o ID do projeto foi passado via GET
    if (!isset($_GET['usr_Id'])) {
        echo "usuario não encontrado.";
        exit;
    }

    $usr_Id = $_GET['usr_Id'];

    // Consulta o projeto
    $sql = "SELECT * FROM usuario WHERE usr_Id = '$usr_Id'";
    $resultado = mysqli_query($conexao, $sql);
    $usuario = mysqli_fetch_assoc($resultado);

    if (!$usuario) {
        echo "Usuario não encontrado.";
        exit;
    }
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar Usuário</title>
    <link rel="stylesheet" href="css/cadastrar_projeto.css">
</head>
<body>
    <?php include "navbar_logado.php"; ?>

    <?php if (isset($_GET['atualizado']) && $_GET['atualizado'] == 1): ?>
        <script>
            alert("Usuario atualizado com sucesso!");
        </script>
    <?php endif; ?>
    <br>
    <br>

    <div class="main-content-form">
        <section class="section edit-project-section">
            <h2>Atualizar Usuário</h2>

            <form class="project-form" method="POST" action="Controller/Atualizar/atualizar_usuario.php">
                <input type="hidden" name="usr_Id" value="<?php echo $usuario['usr_Id']; ?>">

                <div class="form-row">
                    <input type="text" name="usr_Foto" placeholder="URL da Foto" value="<?php echo $usuario['usr_Foto']; ?>">
                    <input type="text" name="usr_Nome" placeholder="Nome Completo" value="<?php echo $usuario['usr_Nome']; ?>">
                </div>

                <div class="form-row">
                    <input type="text" name="usr_Git" placeholder="GitHub" value="<?php echo $usuario['usr_Git']; ?>">
                    <input type="text" name="usr_Link" placeholder="LinkedIn" value="<?php echo $usuario['usr_Link']; ?>">
                </div>

                <div class="form-row">
                    <input type="text" name="usr_Area" placeholder="Área de Atuação" value="<?php echo $usuario['usr_Area']; ?>">
                    <input type="text" name="usr_Inst" placeholder="Instituição" value="<?php echo $usuario['usr_Inst']; ?>">
                </div>

                <div class="form-row">
                    <input type="email" name="usr_Email" placeholder="Email" value="<?php echo $usuario['usr_Email']; ?>">
                    <input type="text" name="usr_Cpf" placeholder="CPF" value="<?php echo $usuario['usr_Cpf']; ?>">
                </div>

                <div class="form-row">
                    <input type="text" name="usr_Sexo" placeholder="Sexo" value="<?php echo $usuario['usr_Sexo']; ?>">
                    <input type="password" name="usr_Senha" placeholder="Senha" value="<?php echo $usuario['usr_Senha']; ?>">
                </div>

                <div class="form-row">
                    <input type="text" name="usr_Logradouro" placeholder="Logradouro" value="<?php echo $usuario['usr_logradouro']; ?>">
                    <input type="text" name="usr_NumeroLogra" placeholder="Número" value="<?php echo $usuario['usr_NumeroLogr']; ?>">
                    <input type="text" name="usr_Cidade" placeholder="Cidade" value="<?php echo $usuario['usr_Cidade']; ?>">
                </div>

                <div class="form-row">
                    <input type="text" name="usr_Status" placeholder="Status" value="<?php echo $usuario['usr_Status']; ?>">
                    <input type="text" name="usr_Nivel" placeholder="Nível" value="<?php echo $usuario['usr_Nivel']; ?>">
                </div>

                <button class="submit-button" type="submit">Atualizar Usuário</button>
            </form>
        </section>
    </div>
</body>
</html>

