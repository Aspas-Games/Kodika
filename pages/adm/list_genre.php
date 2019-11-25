<main>
  <script>
  <?php include 'media/js/formatTable.js' ?>
  formatTable("#genre-list");
  </script>
  <div class="container container-kodika">
    <div class="container wrap-gamelist">
      <div class="row wrap-gamelist-title">
        <h2 class="d-flex justify-content-start status-kodika">Gêneros Cadastrados</h2>
        <a href="index.php?page=genrereg" class="btn-gamereg d-flex justify-content-start"><button class="btn btn-primary">Cadastrar Gênero</button></a>
      </div>
    </div>
    <table id="genre-list" class="table">
      <thead>
        <tr>
          <th class="table-cell table-cell-odd">#</th>
          <th class="table-cell table-cell-even">Título</th>
          <th class="table-cell table-cell-odd">Ações</th>
        </tr>
      </thead>
      <tbody>
        <?php
        include 'assets/includes/connect.php';
        $query = sprintf("SELECT * FROM genero");
        $dados = mysqli_query($conexao, $query) or die(mysql_error());
        $linha = mysqli_fetch_assoc($dados);
        $total = mysqli_num_rows($dados);
        if($total > 0) {
          do {
            ?>
            <tr>
              <td class="table-cell table-cell-odd"><?php echo ($linha['idgenero']);?></td>
              <td class="table-cell table-cell-even"><?php echo ($linha['titulo']);?></td>
              <td class="table-cell table-cell-odd">
                <a href="?pagina=editarGenero&id=<?php echo ($linha['idgenero']);?>&titulo=<?php echo ($linha['titulo']);?>">
                  <button class="btn btn-primary">Editar</button>
                </a>
                <a href="excluir.php?id=<?php echo ($linha['idgenero']);?>">
                  <button class="btn btn-primary">Excluir</button>
                </a>
              </td>
            </tr>
            <?php
          }while($linha = mysqli_fetch_assoc($dados));
        } else {
          ?>
          <tr>
            <td colspan="3" class="status-kodika">Nenhum gênero cadastrado.</td>
            <td style="display: none;" class="table-cell"></td>
            <td style="display: none;" class="table-cell"></td>
          </tr>
          <?php
        }
        mysqli_free_result($dados);
        ?>
      </tbody>
    </table>
  </div>
</main>
