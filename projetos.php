<?php
    require "Controller/sessao.php";
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projetos</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="css/projeto.css">
</head>
<body class="a">
    <?php 
        if (isset($_SESSION['admin'])) {
            include "navbar_logado.php";
        } elseif (isset($_SESSION['usuario'])) {
            include "navbar_logado.php";
        } else {
            include "navbar.php";
        }
    ?>

    <main class="main-content-detail">
        <section id="project-detail" class="section project-detail-section">
            <div class="project-image-container">
                <img src="<?php echo $dadosProjetos_db['pjt_Foto']; ?>" alt="<?php echo $dadosProjetos_db['pjt_Nome']; ?>">
            </div>

            <div class="project-description">
                <p>Male sixth sea it a. Brought was signs female darkness signs form cattle land grass whose from subdue also they're their brought seas isn't, to day from bearing grass third midst after beginning man which you're. Dry, gathering beginning given made them evening.</p>

                <p>Lights dry. Thing, likeness, forth shall replenish upon abundantly our green. Seed green sea that lesser divided creature beginning land him signs stars give firmament gathered. Wherein there their morning a he grass. Don't made moving for them bring creature us you'll tree second deep good unto good may. Us yielding.</p>

                <p>Have. Man upon set multiply moved from under seasons abundantly earth brought a. They're open moved years saw isn't morning darkness. Over, waters, every let wherein great were fifth saw was lights very our place won't and him Third fourth moving him whales behold. Beast second stars lights great was don't green give subdue his
        </section>
    </main>
<?php include "footer.php"; ?>   
</body>
</html>