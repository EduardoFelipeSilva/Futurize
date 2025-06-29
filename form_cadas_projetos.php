<?php
    require "Controller/sessao.php";
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Projeto</title>
    <link rel="stylesheet" href="css/cadastrar_projeto.css">
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
            <h2>Novo Projeto</h2>

            <form action="Controller/cadastrar/cadastro_projeto.php" method="POST" class="project-form">
              <div class="form-row">
                <div class="input-icon">
                  <i class="fas fa-pen-nib"></i>
                  <input type="text" id="pjt_Nome" name="pjt_Nome" placeholder="Nome do Projeto" required>
                </div>

              </div>

              <div class="input-icon">
                <i class="fas fa-image"></i> 
                <input type="text" id="pjt_Foto" name="pjt_Foto" placeholder="URL da Foto do Projeto">
              </div>

              <div class="input-icon">
                <i class="fas fa-calendar-plus"></i> 
                <input type="date" id="pjt_DataInicio" name="pjt_DataInicio">
              </div>

              <div class="input-icon">
                <i class="fas fa-calendar-check"></i> 
                <input type="date" id="pjt_DataTermino" name="pjt_DataTermino">
              </div>

              <div class="input-icon">
                <i class="fas fa-dollar-sign"></i> 
                <input type="text" id="pjt_Preco" name="pjt_Preco" placeholder="Preço do Projeto">
              </div>

              <div class="input-icon">
                <i class="fas fa-globe"></i> 
                <input type="text" id="pjt_Site" name="pjt_Site" placeholder="Site do Projeto">
              </div>

              <div class="input-icon">
                <i class="fas fa-clipboard-check"></i>
                <input type="text" id="pjt_Status" name="pjt_Status" placeholder="Status do Projeto">
              </div>

                <div class="input-icon">
                  <i class="fas fa-align-left"></i> 
                  <textarea id="pjt_Resumo" name="pjt_Resumo" placeholder="Resumo do projeto" required></textarea>
                </div>

            
            <button type="submit" class="submit-button">Cadastrar</button>
            </form>

        </section>
    </main>
    <?php include "footer.php"; ?>