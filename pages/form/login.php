<?php
session_start();
include('../../assets/includes/connect.php');

if(empty($_POST['nickname']) || empty($_POST['password'])) {
	$_SESSION['erro'] = 101;
	header('Location: ../../index.php');
	exit();
}

$nick = mysqli_real_escape_string($conexao, $_POST['nickname']);
$senha = mysqli_real_escape_string($conexao, $_POST['password']);

$query = "select nick from usuario where nick = '{$nick}' and senha = md5('{$senha}')";

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);

if($row == 1) {
	$usuario_bd = mysqli_fetch_assoc($result);
	$_SESSION['nick'] = $usuario_bd['nick'];
	header('Location: ../../index.php?page=home');
	exit();
} else {
	$_SESSION['erro'] = 102;
	header('Location: ../../index.php');
	exit();
}
