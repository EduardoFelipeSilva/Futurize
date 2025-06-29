<?php
    require "Controller/sessao.php";
    include_once "C:\\xampp\htdocs\Futurize\Controller\database.php";

    // Verifica se o ID do projeto foi passado via GET
    if (!isset($_GET['pjt_Id'])) {
        echo "Projeto não encontrado.";
        exit;
    }

    $pjt_Id = $_GET['pjt_Id'];

    // Consulta o projeto
    $sql = "SELECT * FROM projeto WHERE pjt_Id = '$pjt_Id'";
    $resultado = mysqli_query($conexao, $sql);
    $projeto = mysqli_fetch_assoc($resultado);

    if (!$projeto) {
        echo "Projeto não encontrado.";
        exit;
    }
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Editar Projeto</title>
    <link rel="stylesheet" href="css/cadastrar_projeto.css">
</head>
<body>
    <?php include "navbar_logado.php"; ?>
    <br>
    <br>

    <main class="main-content-form">
        <section id="editar-projeto" class="section edit-project-section">
            <h2>Editar Projeto</h2>

            <form action="Controller/Atualizar/atualizar_projeto.php" method="POST" class="project-form">
                <input type="hidden" name="pjt_Id" value="<?php echo $projeto['pjt_Id']; ?>">

                <div class="form-row">
                    <input type="text" name="pjt_Nome" placeholder="Nome" value="<?php echo $projeto['pjt_Nome']; ?>" required>
                    <input type="text" name="pjt_Foto" placeholder="URL da Foto" value="<?php echo $projeto['pjt_Foto']; ?>">
                </div>

                <div class="form-row">
                    <input type="text" name="pjt_Site" placeholder="Site do Projeto" value="<?php echo $projeto['pjt_site']; ?>">
                    <input type="text" name="pjt_Status" placeholder="Status" value="<?php echo $projeto['pjt_Status']; ?>">
                </div>

                <div class="form-row">
                    <input type="date" name="pjt_DataInicio" value="<?php echo $projeto['pjt_DataInicio']; ?>" required>
                    <input type="date" name="pjt_DataTermino" value="<?php echo $projeto['pjt_DataTermino']; ?>">
                </div>

                <div class="form-row">
                    <input type="number" step="0.01" name="pjt_Preco" placeholder="Preço" value="<?php echo $projeto['pjt_Preco']; ?>">
                </div>

                <div class="form-row">
                    <textarea name="pjt_Resumo" placeholder="Resumo do Projeto" rows="4"><?php echo $projeto['pjt_Resumo']; ?></textarea>
                </div>

                <button type="submit" class="submit-button">Salvar Alterações</button>
            </form>
        </section>
    </main>

    <?php include "footer.php"; ?>
</body>
</html>
