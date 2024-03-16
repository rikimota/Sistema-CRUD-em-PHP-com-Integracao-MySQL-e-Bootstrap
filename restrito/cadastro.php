<?php include "../validar.php"; ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/estilo.css" rel="stylesheet">


    <title>Cadastro</title>
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="colun">
                <br>
                <h1>Cadastro</h1>
                <form action="cadastro_script.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <br>
                        <label for="nome">Nome Completo</label>
                        <input type="text" class="form-control" name="nome" required>
                    </div>
                    <div class="form-group">
                        <br>
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" required>
                    </div>
                    <div class="form-group">
                        <br>
                        <label for="dt_nascimento" class="form-label">Data de Nascimento</label>
                        <input type="date" class="form-control" name="dt_nascimento" required>
                    </div>
                    <div class="form-group">
                        <br>
                        <label for="foto" class="form-label">Foto</label>
                        <input type="file" class="form-control" name="foto" accept="image/*">
                    </div>
                    <div class="form-group">    
                    <br><input type="submit" class="btn btn-success">
                    </div>
                </form>
                <br><a href="index.php" class="btn btn-info">Voltar para oInicio</a>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>