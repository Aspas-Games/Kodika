<main>
  <script>
  <?php include 'media/js/formatTable.js' ?>
  formatTable("#game-list");
  </script>
  <div class="container">
    <div class="container wrap-gamelist">
      <div class="row wrap-gamelist-title">
        <h2 class="d-flex justify-content-start">Jogos Cadastrados</h2>
        <a href="index.php?page=gamereg" class="btn-gamereg d-flex justify-content-start"><button class="btn btn-primary">Cadastrar Jogo</button></a>
      </div>
    </div>
    <table id="game-list">
      <thead>
        <tr>
          <th>#</th>
          <th>Título</th>
          <th>Descrição</th>
          <th>Desenvolvedora</th>
          <th>Data de Lançamento</th>
          <th>Idiomas</th>
          <th>Ação</th>
        </tr>
      </thead>
      <tbody>
        <?php
        include 'assets/includes/connect.php';
        $query = sprintf("SELECT * FROM jogo");
        $dados = mysqli_query($conexao, $query) or die(mysql_error());
        $linha = mysqli_fetch_assoc($dados);
        $total = mysqli_num_rows($dados);
        if($total > 0) {
          do {
            ?>
            <tr>
              <td><?php echo ($linha['idjogo']);?></td>
              <td><?php echo ($linha['titulo']);?></td>
              <td><?php echo $linha['descricao'];?></td>
              <td><?php echo ($linha['desenvolvedora']);?></td>
              <td><?php echo ($linha['data_lancamento']);?></td>
              <td><?php echo ($linha['idiomas']);?></td>
              <td>
                <a href="?pagina=editarJogo&id=<?php echo ($linha['idjogo']);?>&titulo=<?php echo ($linha['titulo']);?>&descricao=<?php echo ($linha['descricao']);?>&desenvolvedora=<?php echo ($linha['desenvolvedora']);?>&datalancamento=<?php echo ($linha['data_lancamento']); ?>&idiomas=<?php echo ($linha['idiomas']); ?>&midia=<?php echo ($linha['midia']); ?>">
                  <button class="btn btn-primary">Editar</button>
                </a>
                <a href="excluir.php?id=<?php echo ($linha['idjogo']);?>">
                  <button class="btn btn-primary">Excluir</button>
                </a>
              </td>
            </tr>
            <?php
          }while($linha = mysqli_fetch_assoc($dados));
        } else {
          ?>
          <tr>
            <td colspan="7">Nenhum jogo cadastrado.</td>
            <td style="display: none;"></td>
            <td style="display: none;"></td>
            <td style="display: none;"></td>
            <td style="display: none;"></td>
            <td style="display: none;"></td>
            <td style="display: none;"></td>
          </tr>
          <?php
        }
        mysqli_free_result($dados);
        ?>
      </tbody>
    </table>
  </div>
</main>
