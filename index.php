<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="restrito/css/bootstrap.min.css" rel="stylesheet">
    <link href="./style.css" rel="stylesheet">

    <title>Pagina Inicial</title>
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="colun">
                <div class="jumbotron">
                    <h1 class="display-4">Login</h1>
                    <form action="index.php" method="POST">
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Login</label>
                          <input type="text" class="form-control" name="login" aria-describedby="emailHelp">
                          <div name="login" class="form-text">Digite seus dados para acessar</div>
                        </div>

                        <div class="mb-3">
                          <label for="exampleInputPassword1" class="form-label">Senha</label>
                          <input type="password" class="form-control" name="senha">
                        </div>

                        <button type="submit" class="btn btn-primary">Acessar</button>
                    </form>
                    <?php 
                      if (isset($_POST['login'])) {
                        $login = $_POST['login'];
                        $senha = md5($_POST['senha']);

                        include "restrito/conexao.php";
                        $sql = "SELECT * from `usuarios` WHERE login = '$login' AND senha = '$senha'";

                        if ($result = mysqli_query($conn, $sql)) {
                          $num_registros = mysqli_num_rows($result);
                          if ($num_registros == 1) {
                            $linha = mysqli_fetch_assoc($result);
  
                            if (($login == $linha['login']) and ($senha == $linha['senha'])) {
                              session_start();
                              $_SESSION['login'] = "Robson";
                              header("location: restrito");
                            } else {
                              echo "Login invalido!";
                            } 
                            } else {
                                echo "Login ou senha invalido!";
                            }
                          } else { echo "Nenhum resultado";}
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>