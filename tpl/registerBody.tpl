<div class="col-xs-12">
  <div class="container reg">

    <h2 class="error-msg">
      {$message}
    </h2>

    <h2 class="reg-h">Formulário de Registo</h2>

    <form class="signin reg" method="post" action="register_action.php">
      <div class="form-group">
        <label for="name">Nome:</label>
        <input type="name" id="inputName" name="name" class="form-control" placeholder="Coloque o seu nome" value ="{$name}" required="" autofocus="">
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Coloque o seu email" value ="{$email}"  required="" autofocus="">
      </div>
      <div class="form-group">
        <label for="pwd">Password:</label>
        <input type="password" id="password" name="password" class="form-control" placeholder="Insira a sua Password" required="">
        <input type="password" id="passwordR" name="passwordR" class="form-control rp" placeholder="Confirme a Password" required="">
      </div>
      <div class="btn-group btn-group-justified">
        <button href="" class="btn btn-primary" type="button" VALUE="Back" onClick="history.go(-1);return true;">Voltar</button>
        <button class="btn btn-primary" type="submit">Finalizar Registo</button>
      </div>
    </form>
  </div>
</div>
