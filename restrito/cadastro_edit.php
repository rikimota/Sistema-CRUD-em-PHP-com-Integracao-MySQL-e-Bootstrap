<?php include "../validar.php"; ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <title>Alteração de Cadastro</title>
  </head>
  <body>

    <?php 
        include "conexao.php";
        $id = $_GET['id'] ?? '';
        $sql = "SELECT * FROM alunos WHERE matricula = $id";

        $dados = mysqli_query($conn, $sql);

        $linha = mysqli_fetch_assoc($dados);
    ?>

    <div class="container">
        <div class="row">
            <div class="colun">
                <br>
                <h1>Cadastro</h1>
                <form action="edit_script.php" method="POST">
                    <div class="form-group">
                        <br>
                        <label for="nome">Nome Completo</label>
                        <input type="text" class="form-control" name="nome" required value="<?php echo $linha['nome']; ?>">
                    </div>
                    <div class="form-group">
                        <br>
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" required value="<?php echo $linha['email']; ?>">
                    </div>
                    <div class="form-group">
                        <br>
                        <label for="dt_nascimento" class="form-label">Data de Nascimento</label>
                        <input type="date" class="form-control" name="dt_nascimento" required value="<?php echo $linha['dt_nascimento']; ?>">
                    </div>
                    <div class="form-group">    
                    <br><input type="submit" class="btn btn-success" value="Salvar Alterções">
                    <input type="hidden" name="id" value="<?php echo $linha['matricula']; ?>">
                    </div>
                </form>
                <br><a href="index.php" class="btn btn-info">Voltar para oInicio</a>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>