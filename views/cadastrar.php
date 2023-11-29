<?php

if (!empty($_GET['existenome'])) { ?>
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Atenção!</strong> <?php echo "Já existe esse nome no banco de dados"; ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php } ?>


<h2>Inserir novo cliente</h2>

<form>
    <label for="nome" class="form-label">Nome:
        <input type="text" name="nome" id="nome" required>
    </label>
    <label for="idade" class="form-label">Idade:
        <input type="number" id="idade" name="idade" required>
    </label>
    <label for="tel" class="form-label">Telefone:
        <input type="phone" id="tel" name="tel" required>
    </label>
    <button class="btn btn-primary" value="Inserir" id="btn-inserir">Enviar</button>


</form>