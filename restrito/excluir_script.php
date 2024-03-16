<?php include "../validar.php"; ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <title>Exlusão de Cadastro</title>
  </head>
  <body>
    <div class="container">
        <div class="row">
            <?php
                include "conexao.php";

                $id = $_POST['id'];
                $nome = $_POST['nome'];

                $sql = "DELETE from `alunos` WHERE matricula = $id";

                if (mysqli_query($conn, $sql)) {
                    mensagem ("$nome excluido com sucesso!", 'success');
                }else {
                    mensagem ("$nome NAO foi excluido!", 'danger');
                }
            ?>
            <br>
            <a href="pesquisa.php" class="btn btn-primary">Voltar</a>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>