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
            <?php
                include "conexao.php";

                $nome = $_POST['nome'];
                $email = $_POST['email'];
                $dt_nascimento = $_POST['dt_nascimento'];

                $foto = $_FILES['foto'];
                $nome_foto = mover_foto($foto);
                if ($nome_foto == 0) {
                  $nome_foto = null;
                }

                $sql = "INSERT INTO `alunos`(`nome`, `email`, `dt_nascimento`, `foto`) 
                        VALUES ('$nome','$email','$dt_nascimento', '$nome_foto')";

                if (mysqli_query($conn, $sql)) {
                  if ($nome_foto != null) {
                    echo "<img src='img/$nome_foto' title='$nome_foto' class='mostra_foto'>";
                  }
                  mensagem ("$nome cadastrado com sucesso!", 'success');
                }else {
                    mensagem ("$nome NAO foi cadastrado!", 'danger');
                }
            ?>
            <br>
            <a href="index.php" class="btn btn-primary">Voltar</a>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>