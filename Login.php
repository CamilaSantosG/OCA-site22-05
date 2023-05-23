<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Cliente</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="\sistema\style.css">
</head>
<body>
    <div class="container">
    <div class="row">    
        <div class="col-4 img">
          <img src="\sistema\imagens\vendas.png">
        </div>
        <div class="col-2"></div>
          <div class="col-4 form">
          <?php
        if (isset($_GET['msg'])) {?>
      <h1>Usuário ou senha inválida</h1>
        <?php } ?>

            <form action="logon.php" method="post">
              <div class="container">
                 <div class="row">
                           <h1>Cadastro de Usuário</h1>
                          <div class="col-12">
                            <input type="text" name="login" class="form-control" placeholder="Login" aria-label="First name">
                          </div>
                          <div class="col-12 espaco">
                            <input type="password" name="senha" class="form-control" placeholder="Senha" aria-label="Last name">
                          </div>
                         <div class="col">
                              <input class="btn btn-success" type="submit" value="Acessar">
                              <a class="btn btn-outline-success" href="\sistema\login_cadastrar.php" role="button">Cadastrar</a>
                          </div>
                          
                    </div>   
              </div>
            </form>

  </div>
</div>
</body>
</html>