<main>
  <div class="container container-kodika">
    <h2>Cadastro de Jogo</h2>
    <form method="post" action="pages/form/game_reg.php">
      <div class="row">
        <div class="form-group col">
          <label for="title">Título</label>
          <input type="text" class="form-control" name="title" placeholder="Título do Jogo..." required>
        </div>
        <div class="form-group col">
          <label for="developer">Desenvolvedor(a)</label>
          <input type="text" class="form-control" name="developer" placeholder="Ex.: Aspas Games" required>
        </div>
        <div class="form-group col">
          <label for="languages">Idiomas</label>
          <input type="text" class="form-control" name="languages" placeholder="Ex.: Inglês, Português, etc..." required>
        </div>
        <div class="form-group col">
          <label for="release_date" class="form-label">Data de Lançamento</label>
          <input class="form-control" type="date" value="" name="release_date" required>
        </div>
      </div>
      <div class="form-group">
        <label for="description">Descrição</label>
        <textarea class="form-control" name="description" rows="3" placeholder="Digite aqui a descrição do jogo..." required></textarea>
      </div>
      <div class="form-group">
        <label for="media">Mídia</label>
        <input type="text" class="form-control" name="media" placeholder="Ex.: media/img/nome_da_foto.png" required>
      </div>
      <div class="form-group">
        <input type="submit" value="Cadastrar" class="btn btn-info">
      </div>
    </form>
  </div>
</main>
