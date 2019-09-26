<?php
session_start();
include_once("../assets/includes/connect.php");

if(!empty($_POST['estrela'])){
	$estrela = $_POST['estrela'];
	$comentario = $_POST['coment'];
	//echo $estrela;
	//Salvar no banco de dados

	//$result_avaliacoes = "INSERT INTO avaliacoes VALUES (default, '$estrela', NOW(), '$comentario')";
	$result_avaliacoes = "INSERT INTO comentario VALUES (default,'$comentario', NOW(),'$estrela', default, default)";
	$resultado_avaliacoes = mysqli_query($conexao, $result_avaliacoes) or die(mysqli_error($conexao));

	if(mysqli_insert_id($conexao)){
	//	echo $id;
		$_SESSION['msg'] = "Avaliação cadastrada com sucesso";
		header("Location: index.php");
	}else{
		$_SESSION['msg'] = "Erro ao cadastrar a avaliação";
		header("Location: index.php");
	}

}else{
	$_SESSION['msg'] = "Necessário selecionar pelo menos 1 estrela";
	header("Location: index.php");
}
mysqli_close($conexao);
?>
