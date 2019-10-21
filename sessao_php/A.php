<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>A</title>
  </head>
  <center>
<h2>Pagina "A" verificando autenticidade da função sessao!</h2>
  </center>
  <body>
<?php
// iniciando a sessao, chamando o email do usuario e fazendo verificação se variavel nao esta vazia.
session_start();
if (isset($_SESSION["email"])) {
//novamente se tudo estiver ok sera printado na tela o email do infeliz, caso contrario ira fazer a tratativa de login novamente.
  echo $_SESSION["email"];
}else
header("Location:login.html");
 ?>
  </body>
</html>
