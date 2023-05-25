<div class="form register-form covid-form">
  <div class="box box-form">
    <div class="box-form-head">
      <h3 class="mb-2">Se connecter</h3>
    </div>
    <div class="box-form-content mt-2">
      <form method="POST" action="">

        <div class="form-group mb-4">
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="far fa-building"></i></span>
            </div>
            <input type="text" class="form-control" name="username" id="username" placeholder="Pseudo">
          </div>
        </div>

        <div class="form-group mb-4">
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-key"></i></span>
            </div>
            <input type="password" class="form-control" name="password" id="password" placeholder="Mot de passe">
          </div>
        </div>

        <div class="message">
          <?= ($error) ? '<div class="alert alert-danger" role="alert">Erreur de connexion :(</div>' : '' ?>
        </div>

        <div class="cta text-center mt-4 mb-1">
          <button type="submit" name="submit_register" id="registerButton" class="button button-medium button-orange">Se connecter</button>
        </div>

      </form>
    </div>
  </div>
</div>