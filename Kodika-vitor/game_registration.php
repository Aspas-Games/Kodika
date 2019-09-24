<main>
  <div class="container">
    <h2>Cadastro de Jogo</h2>
    <form class="cadastro" action="game_registration_php.php" method="post">
      <div class="form-group">
        <label for="title">Título</label>
        <input type="text" class="form-control" name="title" placeholder="Título do Jogo...">
      </div>
      <div class="form-group">
        <label for="description">Descrição</label>
        <textarea class="form-control" name="description" rows="3" placeholder="Digite aqui a descrição do jogo..."></textarea>
      </div>
      <div class="form-group">
        <label for="developer">Desenvolvedor(a)</label>
        <input type="text" class="form-control" name="developer" placeholder="Ex.: Aspas Games">
      </div>
      <div class="form-group row">
        <label for="release_date" class="col-2 col-form-label">Data de Lançamento</label>
        <div class="col-10">
          <input class="form-control" type="date" value="" name="release_date">
        </div>
      </div>
      <div class="form-group">
        <label for="languages">Idiomas</label>
        <input type="text" class="form-control" name="languages" placeholder="Ex.: Inglês, Português, etc...">
      </div>
      <div class="form-group">
        <label for="media">Mídia</label>
        <input type="text" class="form-control" name="media" placeholder="Ex.: media/img/nome_da_foto.png">
      </div>
      <div class="form-group">
        <!-- <label for="gender">Gênero</label>
        <select multiple class="form-control" id="gender">
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
        </select> -->
        <button type="submit" class=>Cadastrar</button>
      </div>
    </form>
    <?php
    if (isset($_GET['sucesso'])) {
      ?>
      <script>
        alert('Jogo cadastrado com sucesso!');
      </script>
      <?php
    } elseif (isset($_GET['erro'])) {
      ?>
      <script>
        alert('Algum campo obrigatório não foi preenchido.');
      </script>
      <?php
    }
    ?>
  </div>
</main>
