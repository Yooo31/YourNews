<div class="container">
  <div class="row">
    <div class="col-6 p-5">
      <h3 class="mb-3">S'inscrire</h3>

      <div class="message mb-5 mt-5">
        <?php if (isset($message)) : ?>
          <p class="error-message"><?= $message ?></p>
        <?php endif; ?>
      </div>

      <div class="mt-2">
        <form method="POST" action="">

          <div class="row">
            <div class="col-6 pr-1">
              <div class="mb-4">
                <input type="text" class="form-control" name="name" value="<?= isset($_POST["name"]) ? $_POST["name"] : '' ?>" id="name" placeholder="Prénom">
              </div>
            </div>
            <div class="col-6 pl-1">
              <div class="mb-4">
                <input type="text" class="form-control" name="lastname" value="<?= isset($_POST["lastname"]) ? $_POST["lastname"] : '' ?>" id="lastname" placeholder="Nom">
              </div>
            </div>
          </div>

          <div class="mb-4">
            <input type="text" class="form-control" name="username" value="<?= isset($_POST["username"]) ? $_POST["username"] : '' ?>" id="username" placeholder="Pseudo">
          </div>

          <div class="mb-4">
            <input type="email" class="form-control" name="email" value="<?= isset($_POST["email"]) ? $_POST["email"] : '' ?>" id="email" placeholder="Votre adresse e-mail">
          </div>

          <div class="mb-4">
            <input type="password" class="form-control" name="password" value="<?= isset($_POST["password"]) ? $_POST["password"] : '' ?>" id="password" placeholder="Entrez votre mot de passe">
          </div>

          <div class="mb-4">
            <input type="password" class="form-control" name="confirm_password" value="<?= isset($_POST["confirm_password"]) ? $_POST["confirm_password"] : '' ?>" id="confirm_password" placeholder="Confirmez votre mot de passe">
          </div>

          <div class="row">
            <div class="col">
              <a href="/connexion" class="btn">Se connecter</a>
            </div>
            <div class="col text-right">
              <button type="submit" name="submit_register" id="registerButton" class="btn btn-confirm">C'est parti !</button>
            </div>
          </div>

        </form>
      </div>
    </div>
  </div>
</div>