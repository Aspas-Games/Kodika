<?php
session_start();
include('conexao.php');

if(empty($_POST['nick']) || empty($_POST['senha'])) {
	header('Location: index.php');
	exit();
}

$nick = mysqli_real_escape_string($conexao, $_POST['nick']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

$query = "select nome from usuario where nick = '{$nick}' and senha = md5('{$senha}')";

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);

if($row == 1) {
	$usuario_bd = mysqli_fetch_assoc($result);
	$_SESSION['nick'] = $usuario_bd['nick'];
	header('Location:../includes/painel.php');
	exit();
} else {
	$_SESSION['nao_autenticado'] = true;
	header('Location: index.php');
	exit();
}
