<?php
session_start();
include '../../assets/includes/connect.php';

if (empty($_POST['user']) && empty($_POST['email']) && empty($_POST['password']) && empty($_POST['confpassword'])) {
  //Todos os campos vazios
  $_SESSION['erro'] = 201;
  header('Location: ../../index.php?page=userreg');
} elseif (empty($_POST['user'])) {
  //Campo usuário vazio
  $_SESSION['erro'] = 202;
  header('Location: ../../index.php?page=userreg');
} elseif (empty($_POST['email'])) {
  //Campo email vazio
  $_SESSION['erro'] = 203;
  header('Location: ../../index.php?page=userreg');
} elseif (empty($_POST['password'])) {
  //Campo senha vazio
  $_SESSION['erro'] = 204;
  header('Location: ../../index.php?page=userreg&user='.$_POST['user'].'&email='.$_POST['email'].'');
} elseif (empty($_POST['confpassword'])) {
  //Campo confirmação de senha vazio
  $_SESSION['erro'] = 205;
  header('Location: ../../index.php?page=userreg&user='.$_POST['user'].'&email="'.$_POST['email'].'');
} else {
  //Todos os campos preenchidos
  $user = $_POST['user'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $confpassword = $_POST['confpassword'];

  //Verifica se a senha e a confirmação são iguais
  if ($password == $confpassword) {
    $query = mysqli_query($conexao, "insert into usuario (idusuario, nick, email, senha) values (default, '$user', '$email', (select convert(nvarchar(32),HashBytes('MD5', '$password'),2)))") or die(mysqli_error($conexao));
  } else {
    //Confirmação de senha não bate com a senha digitada
    $_SESSION['erro'] = 206;
    header('Location: ../../index.php?page=userreg&user='.$user.'&email='.$email.'');
  }
}
