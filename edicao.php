<?php
$conexao = mysqli_connect("localhost","root","","test");

if (empty($_POST['nome']) || empty($_POST['email']) || empty($_POST['senha']) || empty($_POST['senha1']) || empty($_POST['id'])) {
  header('Location: ../index.php?erro=101');
} else {
  $usuario = $_POST['nome'];
  $email = $_POST['email'];
  $senha=$_POST['senha'];
  $senha1=$_POST['senha1'];
  $id=$_POST['id'];

  if ($senha!=$senha1) {
    echo "Senhas não coincidem";
  } elseif ($senha == $senha1) {
    $query = mysqli_query($conexao,"UPDATE usuario SET email = '$email', nome='$usuario', senha='$senha' WHERE id='$id'");
    if(mysqli_affected_rows($conexao) > 0){
      echo "Sucesso: Atualizado corretamente!";
    } else {
      echo "Aviso: Não foi atualizado!";
    }

    mysqli_close($conexao);
  } else {
    echo " houve um erro ao tentar editar seu perfil, se o problema persistir faça exame do toque.";
  }
}
?>
