<?php include "../validar.php"; ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <title>Pagina Inicial</title>
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="colun">
                <div class="jumbotron">
                    <h1 class="display-4">Cadastro Web</h1>
                    <p class="lead">Sistema de cadastro simplificado. Base de estudo para Desenvolvimento Web.</p>
                    <hr class="my-4">
                    <p>Acesse as funções.</p>
                    <p class="lead">
                        <a class="btn btn-primary btn-lg" href="cadastro.php" role="button">Cadastro de Aluno</a>
                        <a class="btn btn-primary btn-lg" href="pesquisa.php" role="button">Procurar Aluno</a>
                        <a class="btn btn-danger btn-lg" href="../logout.php" role="button">Sair</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>