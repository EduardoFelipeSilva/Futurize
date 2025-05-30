
<main>
    <div>
        <h3>Formulario de cadastro do Usuario</h3>
    </div>

    <form action="cadastro_usuario.php" method="post">

        <label for="pco_Nome">Nome</label>
        <input type="text" name="pco_Nome" id="pco_Nome" required>

        <label for="pco_Foto">Foto</label>
        <input type="text" name="pco_Foto" id="pco_Foto" >

        <label for="pco_Resumo">Detalhes do parceiro</label>
        <input type="text" name="pco_Resumo" id="pco_Resumo" required>

        <label for="pco_Area">Area de Atuação do parceiro</label>
        <input type="text" name="pco_Area" id="pco_Area" required>

        <label for="pco_Site">Site do parceiro</label>
        <input type="text" name="pco_Site" id="pco_Site" required>

        <label for="pco_Status">Status do projeto</label>
        <input type="text" name="pco_Status" id="pco_Status" required>

        
        <input type="submit" value="Cadastrar Usuario">


    </form>
</main>