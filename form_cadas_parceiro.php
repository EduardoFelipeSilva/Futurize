<?php
    require "Controller/sessao.php";
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Parceiro</title>
    <link rel="stylesheet" href="css/cadastrar_parceiro.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

</head>
<body>
    <?php 
        if (isset($_SESSION['admin'])) {
            include "navbar_logado.php";
        } elseif (isset($_SESSION['usuario'])) {
            include "navbar_logado.php";
        } else {
            include "navbar.php";
        }
    ?>


    <main class="main-content-form">
        <section id="novo-projeto" class="section new-project-section">
            <h2>Novo Parceiro</h2>

            <form action="Controller/cadastrar/cadastro_parceiro.php" method="POST" class="project-form">
              <div class="form-row">
                <div class="input-icon">
                  <i class="fas fa-pen-nib"></i>
                  <input type="text" id="pco_Nome" name="pco_Nome" placeholder="Nome do Parceiro" required>
                </div>

              </div>

              <div class="input-icon">
                <i class="fas fa-image"></i> 
                <input type="text" id="pco_Foto" name="pco_Foto" placeholder="URL da Foto do Parceiro">
              </div>

            <div class="input-icon">
                <i class="fas fa-briefcase"></i>
                <input type="text" id="pco_Area" name="pco_Area" placeholder="Área de parceiro">
            </div>

              <div class="input-icon">
                <i class="fas fa-globe"></i> 
                <input type="text" id="pco_Site" name="pco_Site" placeholder="Site do Parceiro">
              </div>

              <div class="input-icon">
                <i class="fas fa-clipboard-check"></i>
                <input type="text" id="pco_Status" name="pco_Status" placeholder="Status do Parceiro">
              </div>

                <div class="input-icon">
                  <i class="fas fa-align-left"></i> 
                  <textarea id="pco_Resumoo" name="pco_Resumo" placeholder="Resumo do Parceiro" required></textarea>
                </div>

            
            <button type="submit" class="submit-button">Cadastrar</button>
            </form>

        </section>
    </main>
    <?php include "footer.php"; ?>

    </body>
</html>