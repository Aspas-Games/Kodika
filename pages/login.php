<main>
  <div class="container">
    <div class="card loginBackground">
      <img src="media/img/logo_white.png" alt="logo kodika by aspas" class="logoLogin">
      <form class="login-form" action="pages/form/login.php" method="post">
        <?php
        session_start();
        if(isset($_SESSION['erro'])) {
          $erro = $_SESSION['erro'];
          switch ($erro) {
            case '101':
              $mensagem = 'Os campos estão vazios.';
              break;
            case '102':
              $mensagem = 'Informações incorretas.';
              break;
          }
          ?>
          <div class="card login-card">
            <h4><?php echo $mensagem; ?></h4>
          </div>
          <?php
          unset($_SESSION['erro']);
        }
        ?>
        <div class="form-group login-input-wrap">
          <label class="login-input" for="user">Usuário:</label>
          <input class="login-input input-field" type="text" class="form-control" name="nickname">
        </div>
        <div class="form-group login-input-wrap">
          <label class="login-input" for="password">Senha:</label>
          <input class="login-input input-field" type="password" class="form-control" name="password">
        </div>
        <button type="submit" class="btn btn-primary login-btn">Entrar</button>
        <a href="index.php?page=userreg" class="btn btn-primary login-btn">Cadastrar</a>
      </form>
    </div>
  </div>
</main>
