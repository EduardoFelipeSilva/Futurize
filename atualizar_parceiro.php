<?php
    require "Controller/sessao.php";
    include_once "C:\\xampp\\htdocs\\Futurize\\Controller\\database.php";

    if (!isset($_GET['pco_Id'])) {
        echo "Parceiro não encontrado.";
        exit;
    }

    $pco_Id = $_GET['pco_Id'];

    $sql = "SELECT * FROM parceiro WHERE pco_Id = '$pco_Id'";
    $resultado = mysqli_query($conexao, $sql);
    $parceiro = mysqli_fetch_assoc($resultado);

    if (!$parceiro) {
        echo "Parceiro não encontrado.";
        exit;
    }
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar Parceiro</title>
    <link rel="stylesheet" href="css/cadastrar_projeto.css">
</head>
<body>
    <?php include "navbar_logado.php"; ?>
    
    <br><br>

    <div class="main-content-form">
        <section class="section edit-project-section">
            <h2>Atualizar Parceiro</h2>

            <form class="project-form" method="POST" action="Controller/Atualizar/atualizar_parceiro.php">
                <input type="hidden" name="pco_Id" value="<?php echo $parceiro['pco_Id']; ?>">

                <div class="form-row">
                    <input type="text" name="pco_Nome" placeholder="Nome do Parceiro" value="<?php echo $parceiro['pco_Nome']; ?>">
                    <input type="text" name="pco_Area" placeholder="Área de Atuação" value="<?php echo $parceiro['pco_Area']; ?>">
                </div>

                <div class="form-row">
                    <input type="text" name="pco_Site" placeholder="Site" value="<?php echo $parceiro['pco_Site']; ?>">
                    <input type="text" name="pco_Status" placeholder="Status" value="<?php echo $parceiro['pco_Status']; ?>">
                </div>

                <div class="form-row">
                    <input type="text" name="pco_Foto" placeholder="URL da Foto" value="<?php echo $parceiro['pco_Foto']; ?>">
                </div>

                <div class="form-row">
                    <textarea name="pco_Resumo" placeholder="Resumo do Parceiro" rows="5" style="width: 100%;"><?php echo $parceiro['pco_Resumo']; ?></textarea>
                </div>

                <button class="submit-button" type="submit">Atualizar Parceiro</button>
            </form>
        </section>
    </div>
</body>
</html>
