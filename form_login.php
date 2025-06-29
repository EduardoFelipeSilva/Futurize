<?php
    session_start();
?>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="css/login.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="stylesheet" href="css/navbar.css">
</head>
<body class="login-page">
  <?php include "navbar.php"?>

  <div class="login-container" style="margin-top: 120px;">
    <div class="logo">F</div>
    <form action = "Controller/login.php" method = "POST" >
      <input type="text" name="nome" id="nome" placeholder="Nome" required>
      <input type="password" name="senha" id="senha" placeholder="Senha" required>
      <a href="#" class="forgot">Esqueceu sua senha?</a>
      <button type="submit" value = "Acessar">Login</button>
    </form>
    <br>
    <a href="form_cadas_usuario.php"><button >Cadastrar</button></a>
        <?php
        if(isset($_SESSION['mensagem'])){
            echo "<div class='mensagem'>" . $_SESSION['mensagem'] . "</div>";
            unset($_SESSION['mensagem']);
        }
    ?>
  </div>

</body>
</html>