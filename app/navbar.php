<nav>
  <div class="nav-left">
    <div class="logo">
      <img src="assets/img/logo-yournews-transparent.png" alt="YourNews Logo">
    </div>
    <div class="toggle">
      <i class="fa-solid fa-bars open"></i>
      <i class="fa-solid fa-times close"></i>
    </div>
    <ul class="nav-items">
      <li><a class="text-black" href="/">Accueil</a></li>
      <li><a class="text-black" href="/posts">Blog</a></li>
      <?php if (isset($_SESSION["account_type"]) && ($_SESSION["account_type"] == "modo" || $_SESSION["account_type"] == "admin")): ?>
        <li><a class="text-black" href="/admin">Administration</a></li>
      <?php endif; ?>
    </ul>
  </div>
  <div class="nav-right">
    <?php if (isset($_SESSION["is_connected"]) && $_SESSION["is_connected"]): ?>
      <ul class="nav-items">
        <?php if (isset($_SESSION["is_validated"]) && $_SESSION["is_validated"]): ?>
          <li>
            <a href="/post-new" class="btn btn-primary mr-3">Nouveau</a>
          </li>
        <?php endif; ?>
        <li>
          <a href="/deconnexion" class="btn btn-secondary-revert">
            <i class="fas fa-sign-out-alt"></i>
          </a>
        </li>
      </ul>
    <?php else: ?>
      <ul class="nav-items">
        <li>
          <a href="/connexion" class="btn btn-primary mr-3">Connexion</a>
        </li>
        <li>
          <a href="/inscription" class="btn btn-secondary-revert">Inscription</a>
        </li>
      </ul>
    <?php endif; ?>
  </div>
</nav>
