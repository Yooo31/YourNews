<div class="container">
  <div class="row">
    <div class="col-6 p-5">
      <h3 class="mb-3">Se connecter</h3>

      <div class="message mb-5 mt-5">
        <?php if (isset($message)) : ?>
          <p class="error-message"><?= $message ?></p>
        <?php endif; ?>
      </div>

      <div class="mt-2">
        <form method="POST" action="">

          <div class="mb-4">
            <input type="text" class="form-control" name="username" id="username" placeholder="Pseudo">
          </div>

          <div class="mb-4">
            <input type="password" class="form-control" name="password" id="password" placeholder="Mot de passe">
          </div>

          <div class="row">
            <div class="col">
              <a href="/inscription" class="btn">S'inscrire</a>
            </div>
            <div class="col text-right">
              <button type="submit" name="submit_register" id="registerButton" class="btn btn-confirm">Se connecter</button>
            </div>
          </div>

        </form>
      </div>
    </div>
  </div>
</div>