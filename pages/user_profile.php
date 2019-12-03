<?php
include 'assets/includes/user_validation.php';
include 'assets/includes/adm_validation.php';

if( isset($_SESSION['login'])){
  $user = $_SESSION['login'];
}
$connect = mysqli_connect ('localhost', 'root', '', 'jimmyjimmy');
$query = "SELECT nick, email, nome_fase, max_ptos FROM usuario WHERE nick = '$user' ORDER BY idusuario DESC";
$query_result = mysqli_query ($connect, $query);
$result = mysqli_fetch_array($query_result);
print_r($result);
    ?>
    <h2>Perfil de '<?php echo $result['nick']; ?>'</h2>
    <h2>email <?php echo $result['email']; ?> </h2>
