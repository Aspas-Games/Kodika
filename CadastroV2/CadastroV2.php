<?php

$nick = isset($_POST['nick']) ? $_POST['nick'] : '';
$senha = isset($_POST['senha']) ? $_POST['senha'] : '';
$conexao = mysqli_connect('localhost','root','root', 'jimmyJimmy');
$query_select = "SELECT nick FROM usuario WHERE nick = '$nick'";
$select = mysqli_query($conexao, $query_select);
if(mysqli_query($conexao, $query_select)){
  $result =  mysqli_fetch_array($query_select, $conexao);
  mysqli_close($conexao);
}else{
  die("Error:".$conexao->error);
  mysqli_close($conexao);
}
$array = mysqli_fetch_array($select);
$logarray = $array['nick'];

if($nick == "" || $nick == null){
  echo"<script language='javascript' type='text/javascript'>
  alert('O campo login deve ser preenchido');window.location.href='
  cadastro.html';</script>";

}else{
  if($logarray == $login){

    echo"<script language='javascript' type='text/javascript'>
    alert('Esse login já existe');window.location.href='
    cadastro.html';</script>";
    die();

  }else{
    $query = "INSERT INTO usuarios (nick,senha) VALUES ('$login','$senha')";
    $insert = mysqli_query($query,$connect);

    if($insert){
      echo"<script language='javascript' type='text/javascript'>
      alert('Usuário cadastrado com sucesso!');window.location.
      href='login.html'</script>";
    }else{
      echo"<script language='javascript' type='text/javascript'>
      alert('Não foi possível cadastrar esse usuário');window.location
      .href='cadastro.html'</script>";
    }
  }
}
?>
<!<!DOCTYPE html>
<html>
<head>
  <title>CADASTRO KODIKA</title>
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
            <th>Apelido:</th>
            <th><input type="text" name="nick" value="" maxlength="30"  placeholder=""></th>
          </tr>
          <tr>
            <th>E_MAIL</th>
            <th><input type="email" name="email" value="" placeholder="user@outlook.com" maxlength="90"></th>
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
