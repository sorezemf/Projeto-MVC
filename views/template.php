<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestão de Clientes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./estilo.css">
    <link rel="stylesheet" href="./responsivo.css">
</head>

<body>
    <header class="row">

        <div class="d-md-none">
            <nav class="navbar">
                <div class="container-fluid ">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <h1>Gestão de Clientes</h1>
                    <div class="container-fluid collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item"><a href="<?php echo BASE_URL; ?>" aria-current="page" class="text-decoration-none nav-link">Página Inicial</a></li>
                            <li class="nav-item"><a href="<?php echo BASE_URL; ?>cadastrar" class="text-decoration-none nav-link">Novo Cadastro</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <div class="d-none d-md-block">
            <h1>Gestão de Clientes</h1>
        </div>


    </header>
    <main class=" row">
        <!-- painel esquerdo -->
        <section class="col-2 painel-esquerdo vh-100 d-none d-sm-block">

            <nav>
                <ul class="list-unstyled">
                    <li><a href="<?php echo BASE_URL; ?>" class="text-decoration-none">Página Inicial</a></li>
                    <li><a href="<?php echo BASE_URL; ?>cadastrar" class="text-decoration-none">Novo Cadastro</a></li>
                </ul>
            </nav>
        </section>
        <!-- painel direito -->
        <section class="col-10 painel-direito vh-100 ">
            <?php $this->loadInTemplate($viewName, $viewData) ?>
        </section>

    </main>
    <footer></footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="<?php echo BASE_URL; ?>js.js"></script>

</html>