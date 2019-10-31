<main>
  <div class="container">
    <div class="card loginBackground">
      <img src="media/img/logo_white.png" alt="logo kodika by aspas" class="logoLogin">
      <form class="login-form" action="pages/form/login.php" method="post">
        <div class="form-group login-input-wrap">
          <label class="login-input" for="user">Usuário:</label>
          <input class="login-input input-field-1" type="text" class="form-control" name="nickname">
        </div>
        <div class="form-group login-input-wrap">
          <label class="login-input" for="user">E-mail:</label>
          <input class="login-input input-field-2" type="email" class="form-control" name="nickname">
        </div>
        <div class="form-group login-input-wrap">
          <label class="login-input" for="password">Senha:</label>
          <input class="login-input input-field-3" type="password" class="form-control" name="password">
        </div>
        <div class="form-group login-input-wrap">
          <label class="login-input" for="password-confirm">Confirme a senha:</label>
          <input class="login-input input-field-4" type="password" class="form-control" name="password-confirm">
        </div>
        <button type="submit" class="btn btn-primary login-btn">Cadastrar</button>
        <a href="index.php" class="btn btn-primary login-btn">Voltar</a>
      </form>
    </div>
  </div>
</main>
