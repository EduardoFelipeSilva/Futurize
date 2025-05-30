<main>
    <div>
        <h3>Formulario de cadastro do Usuario</h3>
    </div>

    <form action="cadastro_usuario.php" method="post">

        <label for="pjt_Nome">Nome</label>
        <input type="text" name="pjt_Nome" id="pjt_Nome" required>

        <label for="pjt_Foto">Foto</label>
        <input type="text" name="pjt_Foto" id="pjt_Foto" >

        <label for="pjt_Resumo">Resumo</label>
        <input type="text" name="pjt_Resumo" id="pjt_Resumo" required>

        <label for="pjt_DataInicio">Data de Inicio do projeto</label>
        <input type="text" name="pjt_DataInicio" id="pjt_DataInicio" >

        <label for="pjt_DataTermino">Data de termino do projeto</label>
        <input type="text" name="pjt_DataTermino" id="pjt_DataTermino" >

        <label for="pjt_Preco">Preço do Projeto</label>
        <input type="text" name="pjt_Preco" id="pjt_Preco">

        <label for="pjt_Site">Site do Projeto</label>
        <input type="text" name="pjt_Site" id="pjt_Site" >

        <label for="pjt_Status">Status do Projeto</label>
        <input type="text" name="pjt_Status" id="pjt_Status">


        <input type="submit" value="Cadastrar Usuario">


    </form>
</main>