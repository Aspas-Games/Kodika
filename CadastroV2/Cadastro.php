<html>
<head>
  <title> Cadastro de Usuário</title>
</head>
<body>
  <center>
    <h1>Cadastro KODIKA</h1>
    <div class="container">
      <table border="0">
        <form method="POST" action="cadastro.php">
          <thead>
            <tr>
              <th>Apelido:</th>
              <th><input type="text" name="nick" id='nick' value="" maxlength="30"  placeholder=""></th>
            </tr>
            <tr>
              <th>E_MAIL</th>
              <th><input type="email" name="email" id='email' value="" placeholder="user@outlook.com" maxlength="90"></th>
            </tr>
            <tr>
              <th>SENHA:</th>
              <th><input type="password" name="senha" id='senha' value="" maxlength="12" placeholder=""></th>
            </tr>
            <tr>
              <th>
                <input type="submit" value="Cadastrar" id="cadastrar" name="cadastrar">
              </th>
            </tr>
          </thead>
        </table>
      </form>
    </div>
  </center>
</body>
</html>
