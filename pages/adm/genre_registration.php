<main>
  <div class="container container-kodika">
    <h2>Cadastro de Gênero</h2>
    <form action="pages/form/genre_reg.php" method="post">
      <div class="form-group">
        <label for="title">Título</label>
        <input type="text" class="form-control" name="title" placeholder="Título do Gênero...">
      </div>
      <div class="form-group">
        <input type="submit" value="Registrar" class="btn btn-info">
      </div>
    </form>
    <?php
      $sucesso = isset($_GET['sucesso'])?$_GET['sucesso']:'';
      if ($sucesso):
        ?>
        <div class="alert alert-success" role="alert">
            <strong>Sucesso!</strong>
            Gênero gravado com sucesso.
        </div>
      <?php
        endif;
        $erro = isset($_GET['erro'])?$_GET['erro']:'';
        if ($erro):
          ?>
          <div class="alert alert-danger" role="alert">
              <strong>Erro!</strong>
              Erro nos dados, verifique o formulário.
          </div>
      <?php endif; ?>
  </div>
</main>
