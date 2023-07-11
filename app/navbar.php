<nav>
  <div class="nav-left">
    <div class="logo">
      <h2>YN</h2>
      <img src="" alt="">
    </div>
    <div class="toggle">
      <i class="fa-solid fa-bars open"></i>
      <i class="fa-solid fa-times close"></i>
    </div>
    <ul class="nav-items">
      <li><a class="text-black" href="/">Accueil</a></li>
      <li><a class="text-black" href="/posts">Blog</a></li>
      <?php if (isset($_SESSION["is_admin"]) && $_SESSION["is_admin"]): ?>
        <li><a class="text-black" href="/admin">Administration</a></li>
      <?php endif; ?>
    </ul>
  </div>
  <div class="nav-right">
    <?php if (isset($_SESSION["is_connected"]) && $_SESSION["is_connected"]): ?>
      <ul class="nav-items">
        <li>
          <a href="/post-new" class="nav-btn nav-new bg-primary text-white">Nouveau</a>
        </li>
        <li>
          <button class="nav-btn nav-connect text-black">
            <i class="fa-regular fa-user"></i>
            <i class="fa-solid fa-caret-down"></i>
          </button>
        </li>
      </ul>
    <?php else: ?>
      <ul class="nav-items">
        <li>
          <a href="/connexion" class="nav-btn nav-new bg-primary text-white">Connexion</a>
        </li>
      </ul>
    <?php endif; ?>
  </div>
</nav>
