<!<!DOCTYPE html>
<html>
  <head>
    <title>CADASTRO ASPAS GAMES</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <meta name="author" content="Felipe G. Pereira">
    <meta name="description" content="Site para cadastro para o programa minha casa minha vida">
    <meta name="keywords" content="Minha casa minha vida, Cadastro, Casa, Minha vida">
  </head>
  <body>
  <style media="screen">
  h1{
    color: black;
  }
  body{
    text-align: center;
    text-rendering: auto;
    background-image: url(http://aspas.96.lt/wp-content/uploads/2018/10/man_holding_poster___AspasPoster.jpg);
    background-repeat: no-repeat;
  }
  </style>
    <header id="topo">
      <h1>Cadastro</h1>
    </header>
    <center>
    <div class="container">
      <table border="0">
      <form class="" action="index.php" name="cadastro" method="get">
        <thead>
          <tr>
            <th>NOME:</th>
            <th><input type="text" name="nome" value="" maxlength="30"  placeholder=""></th>
          </tr>
          <tr>
            <th>Apelido:</th>
            <th><input type="text" name="apelido" value="" maxlength="15"></th>
          </tr>
          <tr>
            <th>DATA DE NASCIMENTO:</th>
            <th><input type="date" name="data_nasc" value="" placeholder="Apenas números"></th>
          </tr>
            <th>E_MAIL</th>
            <th><input type="email" name="email" value="" placeholder="user@outlook.com" maxlength="90"></th>
          </tr>
          <tr>
            <th>LOGIN:</th>
            <th><input type="user" name="login" value="" max="30" min="5"></th>
          </tr>
          <tr>
            <th>SENHA:</th>
            <th><input type="password" name="senha" value="" maxlength="12" placeholder=""></th>
          </tr>
          <tr>
            <th>
              <a href="../../index.php"><button class="btn btn-primary btn-default">Cadastrar</button></a>
            </th>
          </tr>
        </thead>
      </table>
      </form>
    </div>
  </center>
  </body>
</html>
