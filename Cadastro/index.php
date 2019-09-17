<!DOCTYPE html>
<?php
if (isset($_GET["erro"])) {
  $erro = $_GET["erro"];

  if ($erro == 254) {
    echo "<script>
    alert('Usuário e senha incorretos!');
    </script>";
  }
  elseif ($erro == 414) {
    echo "<script>
    alert('Usuário não autenticado');
    </script>";
  }
}
?>
<html lang="pt-br" dir="ltr">
<head>
  <meta charset="utf-8">
  <title></title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <style media="screen">
  h1{
    color: white;
  }
  h3{
    color: white;
  }
  .container{
    padding-top: 50px;
    background-color: rgba(0,0,0,.6);
    max-width: 250px;

  }
  body{
    text-align: center;
    text-rendering: auto;
    background-image: url(http://aspas.96.lt/wp-content/uploads/2018/10/man_holding_poster___AspasPoster.jpg);
    background-repeat: no-repeat;
  }
  </style>
</head>
<body>
  <div class="container">
    <div class="mx-auto" style="width:200px;">
      <form action="includes/validarLogin.php" method="post">
        <h1>ASPAS GAMES<h1>
          <h3>Entrar</h3>
          <br>
          <div class="form-group">
            <input type="text" id="login" placeholder="Usuário" name="login" class="form-control">
          </div>
          <div class="form-group">
            <input type="password" class="form-control" placeholder="Senha" name="senha">
          </div>
          <button type="submit" class="btn btn-primary">Entrar</button>
        </form>
        <a href="paginas/cadastro/cadastro.php"><button class="btn btn-primary btn-default">Cadastrar</button></a>
      </div>
    </div>
  </body>
  </html>
