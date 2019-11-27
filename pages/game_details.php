<?php
include 'assets/includes/user_validation.php';
include 'assets/includes/connect.php';
$query = sprintf("SELECT * FROM jogo");
$dados = mysqli_query($conexao, $query) or die(mysql_error());
$linha = mysqli_fetch_assoc($dados);
$total = mysqli_num_rows($dados);
?>
<main>
  <div class="container container-kodika">
    <div class="container-game-details">
      <div class="row">
        <div class="col">
          <img src="<?php echo ($linha['midia']);?>" class="image-game-details">
        </div>
        <div class="col">
          <h2 class="col titulo-game-details"><?php echo ($linha['titulo']);?></h2>
          <p class="desc-game-details"><?php echo ($linha['descricao']);?></p>
          <p class="text-game-details">Desenvolvido por: <?php echo ($linha['desenvolvedora']);?></p>
          <p class="text-game-details">Gênero: Ação, Aventura</p>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <h2 class="coment-game-details">Comentários:</h2>
          <div class="container-coment">
            <p class="comentario">Adorei tudo, gráficos incríveis</p>
            <h5 class="autor-comentario">Um Gamerzinho 69</h5>
          </div>
        </div>
        <div class="col">
          <a href="index.php?page=comentgame"><button type="button" class="btn btn-primary btn-gamereg btn-game-details btn-game-coment">Comentar</button></a>
          <a href="index.php?page=mygames"><button type="button" class="btn btn-primary btn-gamereg btn-game-details btn-game-back">Voltar</button></a>
        </div>
      </div>
    </div>
  </div>
</main>
