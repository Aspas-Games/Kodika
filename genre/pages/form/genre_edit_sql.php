<?php
  include '../../assets/includes/connect.php';
  session_start();

  if (isset($_SESSION['idgenero'])) {
    $titulo = $_POST['title'];
    $idgenero = $_SESSION['idgenero'];


    $query = sprintf("UPDATE genero SET titulo = '$titulo' WHERE idgenero = '$idgenero';");
    mysqli_query($conexao, $query);

    unset($_SESSION['id']);
    header('Location: ../../index.php?page=genrelist&sucesso=807');
  }
