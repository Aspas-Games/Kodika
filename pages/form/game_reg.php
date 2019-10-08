<?php
if (isset($_POST['title']) && isset($_POST['description']) && isset($_POST['developer']) && isset($_POST['release_date']) && isset($_POST['languages']) && isset($_POST['media'])/* && isset($_POST['gender'])*/) {
  $title = $_POST['title'];
  $description = $_POST['description'];
  $developer = $_POST['developer'];
  $date = $_POST['release_date'];
  $languages = $_POST['languages'];
  $media = $_POST['media'];
  // $gender = $_POST['gender'];

  $conexao = mysqli_connect("localhost", "root","", "jimmyjimmy");
  $query = mysqli_query($conexao, "INSERT INTO jogo VALUES(DEFAULT,'$title', '$description','$developer','$date','$languages', '$media')") or die(mysqli_error($conexao));

  header('Location: game_registration.php?sucesso=1');
} else {
  header('Location: game_registration.php?erro=69');
}
