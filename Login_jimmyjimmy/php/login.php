<?php
$conexao = mysqli_connect("localhost","root","root","jimmyjimmy");

if (!empty($_POST['email']) && !empty($_POST['senha'])) {
  $usuario = $_POST['email'];
  $senha = $_POST['senha'];

  $query = "SELECT email, senha FROM usuario WHERE email = '$usuario'";
  $dados = mysqli_query($conexao, $query);
  $linha = mysqli_fetch_assoc($dados);
  $total = mysqli_num_rows($dados);

  if ($total > 0) {
    do {
      $usuario_bd = $linha['email'];
      $senha_bd = $linha['senha'];
    } while ($linha = mysqli_fetch_assoc($dados));
  }

  if (isset($usuario_bd) && isset($senha_bd)) {
    if (($usuario == $usuario_bd) && ($senha == $senha_bd)) {
      echo "<center>Login bem-sucedido!</center>";
      //header('Location:../formulario.html');
    } elseif (($usuario == $usuario_bd) && ($senha != $senha_bd)) {
      echo  '<script>alert("Senha incorreta");</script>';
    }
  } else {
      echo "<center>Login incorreto ou não existente!</center>";
  }
} else {
  echo "<center>Preencha todos os campos corretamente!</center>";
}
