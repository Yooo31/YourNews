<div class="form register-form covid-form">
  <div class="box box-form">
    <div class="box-form-head">
      <h3 class="mb-2">S'inscrire</h3>
    </div>
    <div class="box-form-content mt-2">
      <form method="POST" action="">

        <div class="row">
          <div class="col-6">
            <div class="form-group mb-4">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-user"></i></span>
                </div>
                <input type="text" class="form-control" name="firstname" value="<?= isset($_POST["firstname"]) ? $_POST["firstname"] : '' ?>" id="firstname" placeholder="Prénom">
              </div>
            </div>
          </div>
          <div class="col-6">
            <div class="form-group mb-4">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-user"></i></span>
                </div>
                <input type="text" class="form-control" name="lastname" value="<?= isset($_POST["lastname"]) ? $_POST["lastname"] : '' ?>" id="lastname" placeholder="Nom">
              </div>
            </div>
          </div>
        </div>

        <div class="form-group mb-4">
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="far fa-building"></i></span>
            </div>
            <input type="text" class="form-control" name="name" id="name" placeholder="Pseudo">
          </div>
        </div>

        <div class="form-group mb-4">
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="far fa-envelope"></i></span>
            </div>
            <input type="email" class="form-control" name="email" value="<?= isset($_POST["email"]) ? $_POST["email"] : '' ?>" id="email" placeholder="Votre adresse e-mail">
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
        <div class="form-group mb-4">
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-key"></i></span>
            </div>
            <input type="password" class="form-control" name="password" id="password" placeholder="Confirmer Mot de passe">
          </div>
        </div>

        <div class="message"></div>

        <div class="cta text-center mt-4 mb-1">
          <button type="button" name="submit_register" id="registerButton" class="button button-medium button-orange">C'est parti !</button>
        </div>

      </form>
    </div>
  </div>
</div>
