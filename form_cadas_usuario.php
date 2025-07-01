<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar</title>
    <link rel="stylesheet" href="css/cadastrar.css">
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
            <h2>Novo Usuário</h2>

            <form action="Controller/cadastrar/cadastro_usuario.php" method="POST" class="project-form">
            <div class="form-row">
                <div class="input-icon">
                <i class="fas fa-user"></i>
                <input type="text" id="usr_Nome" name="usr_Nome" placeholder="Nome" required>
                </div>
                <div class="input-icon">
                <i class="fab fa-github"></i>
                <input type="text" id="usr_Git" name="usr_Git" placeholder="GitHub" required>
                </div>
            </div>
            <div class="input-icon">
                <i class="fas fa-image"></i>
                <input type="text" id="usr_Foto" name="usr_Foto" placeholder="Foto (URL)">
            </div>
            <div class="input-icon">
                <i class="fab fa-linkedin"></i>
                <input type="text" id="usr_Link" name="usr_Link" placeholder="LinkedIn">
            </div>
            <div class="input-icon">
                <i class="fas fa-briefcase"></i>
                <input type="text" id="usr_Area" name="usr_Area" placeholder="Área de atuação">
            </div>
            <div class="input-icon">
                <i class="fab fa-instagram"></i>
                <input type="text" id="usr_Inst" name="usr_Inst" placeholder="Instagram">
            </div>
            <div class="input-icon">
                <i class="fas fa-lock"></i>
                <input type="password" id="usr_Senha" name="usr_Senha" placeholder="Senha">
            </div>
            <div class="input-icon">
                <i class="fas fa-envelope"></i>
                <input type="email" id="usr_Email" name="usr_Email" placeholder="Email">
            </div>
            <div class="input-icon">
                <i class="fas fa-id-card"></i>
                <input type="text" id="usr_Cpf" name="usr_Cpf" placeholder="CPF">
            </div>
            <div class="input-icon">
                <i class="fas fa-venus-mars"></i>
                <input type="text" id="usr_Sexo" name="usr_Sexo" placeholder="Sexo">
            </div>
            <div class="input-icon">
                <i class="fas fa-map-marker-alt"></i>
                <input type="text" id="usr_Logradouro" name="usr_Logradouro" placeholder="Logradouro">
            </div>
            <div class="input-icon">
                <i class="fas fa-hashtag"></i>
                <input type="text" id="usr_NumeroLogra" name="usr_NumeroLogra" placeholder="Número">
            </div>
            <div class="input-icon">
                <i class="fas fa-city"></i>
                <input type="text" id="usr_Cidade" name="usr_Cidade" placeholder="Cidade">
            </div>
            <button type="submit" class="submit-button">Cadastrar</button>
            </form>

<style>
.input-icon {
  position: relative;
  display: flex;
  align-items: center;
  background-color: var(--input-background);
  border: 1px solid var(--input-border);
  border-radius: 12px;
  padding: 0 15px;
  height: 50px;
}

.input-icon i {
  color: var(--light-blue);
  font-size: 1.1rem;
  margin-right: 10px;
}

.input-icon input {
  flex: 1;
  background: transparent;
  border: none;
  color: var(--white-text);
  font-size: 1rem;
  padding: 0;
  outline: none;
}

.input-icon input::placeholder {
  color: rgba(255, 255, 255, 0.6);
}

</style>

        </section>
    </main>
    <?php include "footer.php"; ?>
</body>
</html>
    