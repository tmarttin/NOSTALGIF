<?php include("header.php"); ?>
    
    <h2>Formulário para cadastro de Principals</h2>
    <p>*Campo Obrigatório</p>
    <br>

    <form action="cadastrarPrincipal.php" method="POST" enctype="multipart/form-data">

        <div class="form-group">
            <label for="fotoPrincipal">Foto:</label>
            <input type="file" class="btn btn-link" name="fotoPrincipal">
        </div>

        <div class="form-floating mb-3 mt-3">   
            <input type="text" class="form-control" placeholder="Informe o nome do Principal" name="nomePrincipal">
            <label for="nomePrincipal" class="form-label">*Nome:</label>
        </div>

        <div class="form-floating mb-3 mt-3">
            <input type="text" class="form-control" placeholder="Informe a descrição do capeonato" name="descricaoPrincipal" id="cpfPrincipal">
            <label for="descricaoPrincipal" class="form-label" id="descricaoPrincipal">*Descrição:</label>
        </div>

        <div class="form-floating mb-3 mt-3">
            <input type="date" class="form-control" placeholder="Informe a data inicio" name="dtInicioPrincipal">
            <label for="dtInicioPrincipal" class="form-label">*Data inicio:</label>
        </div>

        <div class="form-floating mb-3 mt-3">
            <input type="date" class="form-control" placeholder="Informe a data fim" name="dtFimPrincipal">
            <label for="dtFimPrincipal" class="form-label">*Data fim:</label>
        </div>
        
        <div style="margin-top:30px; margin-bottom:30px;">
            <button type="submit" class="btn btn-outline-success">Cadastrar</button>
        </div>

        

    </form>

<?php include("footer.php");