<?php
session_start();
include('verifLogin.php');
?>

<h2>Olá, <?php echo $_SESSION['nick'];?></h2>
<h2><a href="logout.php">Sair</a></h2>
