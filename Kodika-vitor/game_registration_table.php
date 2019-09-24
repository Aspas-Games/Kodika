<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $arrayJogos = $_SESSION["jogosCadastrados"];
    foreach ($arrayJogos as $key => $jogo) {
      echo "<tr>";
      echo "<th scope='row'>$key</th>";
      echo "<td>";
      echo $jogo['titulo'];
      echo "</td>";
      echo "<td>";
      echo $jogo['descricao'];
      echo "</td>";
      echo "<td>";
      echo $jogo['desenvolvedora'];
      echo "</td>";
      echo "<td>";
      echo "</tr>";
      ?>
  </body>
</html>
