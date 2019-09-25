<?php
include 'conexao.php';

if (!empty($_POST['nick']) && !empty($_POST['email']) && !empty($_POST['senha'])) {
  $nick = $_POST['nick'];
  $email = $_POST['email'];
  $senha = $_POST['senha'];

  $query = mysqli_query($conexao, "INSERT INTO usuario VALUES(DEFAULT,'$nick', '$email','$senha', null, null, null)") or die(mysqli_error($conexao));

  header('Location: ../cadastro/cadastro.php?sucesso=1');
} else {
  header('Location: ../cadastro/cadastro.php?erro=1');
}
