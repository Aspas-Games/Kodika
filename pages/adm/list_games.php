<main>
  <script>
  <?php include 'media/js/formatTable.js' ?>
  formatTable("#game-list");
  </script>
  <div class="container container-kodika">
    <div class="container wrap-gamelist">
      <div class="row wrap-gamelist-title">
        <h2 class="d-flex justify-content-start status-kodika">Jogos Cadastrados</h2>
        <a href="index.php?page=gamereg" class="btn-gamereg d-flex justify-content-start"><button class="btn btn-primary">Cadastrar Jogo</button></a>
      </div>
    </div>
    <table id="game-list" class="table">
      <thead>
        <tr>
          <th class="table-cell table-cell-odd">#</th>
          <th class="table-cell">Título</th>
          <th class="table-cell table-cell-odd">Descrição</th>
          <th class="table-cell">Desenvolvedora</th>
          <th class="table-cell table-cell-odd">Data de Lançamento</th>
          <th class="table-cell">Idiomas</th>
          <th class="table-cell table-cell-odd">Ação</th>
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
              <td class="table-cell table-cell-odd"><?php echo ($linha['idjogo']);?></td>
              <td class="table-cell"><?php echo ($linha['titulo']);?></td>
              <td class="table-cell table-cell-odd"><?php echo $linha['descricao'];?></td>
              <td class="table-cell"><?php echo ($linha['desenvolvedora']);?></td>
              <td class="table-cell table-cell-odd"><?php echo ($linha['data_lancamento']);?></td>
              <td class="table-cell"><?php echo ($linha['idiomas']);?></td>
              <td class="table-cell table-cell-odd">
                <a href="?page=editGame&idjogo=<?php echo ($linha['idjogo']);?>&titulo=<?php echo ($linha['titulo']);?>&descricao=<?php echo ($linha['descricao']);?>&desenvolvedora=<?php echo ($linha['desenvolvedora']);?>&datalancamento=<?php echo ($linha['data_lancamento']); ?>&idiomas=<?php echo ($linha['idiomas']); ?>&midia=<?php echo ($linha['midia']); ?>">
                  <button class="btn btn-primary">Editar</button>
                </a>
                <a href="pages/form/delete_game.php?idjogo=<?php echo ($linha['idjogo']);?>">
                  <button class="btn btn-primary">Excluir</button>
                </a>
              </td>
            </tr>
            <?php
          }while($linha = mysqli_fetch_assoc($dados));
        } else {
          ?>
          <tr>
            <td colspan="7" class="status-kodika">Nenhum jogo cadastrado.</td>
            <td style="display: none;" class="table-cell"></td>
            <td style="display: none;" class="table-cell"></td>
            <td style="display: none;" class="table-cell"></td>
            <td style="display: none;" class="table-cell"></td>
            <td style="display: none;" class="table-cell"></td>
            <td style="display: none;" class="table-cell"></td>
          </tr>
          <?php
        }
        mysqli_free_result($dados);
        ?>
      </tbody>
    </table>
    <?php
    if (isset($_GET['sucesso'])) {
      $sucesso = $_GET['sucesso'];
      if ($sucesso == 801) {
        ?>
        <script>
          alert('Dados de jogo editados com sucesso.');
        </script>
        <?php
      }
    }
    ?>
  </div>
</main>
