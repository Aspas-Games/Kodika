<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Home</title>
  </head>
  <body>
    <center>
    <h2>Boas vindas</h2>
<?php
//Inicio a sessao aqui, e faço uma verificação se a variavel nao está vazia.
session_start();
if (isset($_SESSION["email"])) {
//caso ok será printado na tela o nome de usuario, mas poderia ser o nick name, id, nome, como preferir.
  echo $_SESSION['email'];
}else
header("Location:login.html");
 ?>

<form action="../A.php1">
  <button type="submit" name="button">Outra pagina</button>
</form>
    </center>
  </body>
</html>
