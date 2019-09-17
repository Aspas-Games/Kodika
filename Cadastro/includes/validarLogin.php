<?php
session_start();

$login = isset($_POST["login"]) ? $_POST["login"] : "";
$senha = isset($_POST["senha"]) ? $_POST["senha"] : "";

echo $login . "<br>";
echo $senha;

if($login == "admin" && $senha == "123"){
	$_SESSION["login"] = $login;
	$_SESSION["senha"] = $senha;
	header("Location: ../paginas/home/index.php");
}
else{
	header("Location: ../index.php?erro=254");
}
?>
