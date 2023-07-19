<div id="admin">

  <div class="container mb-5 mt-5">
    <div class="row">
      <div class="col text-center">
        <h1 class="mb-5">Bonjour, <?php echo $_SESSION["user_name"]; ?></h1>
      </div>
    </div>
  </div>

  <div class="container mt-5">
    <div class="row">
      <div class="col-6">
        <a href="/admin-accounts">
          <div class="square-card bg-primary">
            <i class="fas fa-users"></i>
          </div>
          <h2 class="text-center text-primary mt-5">Gestion des utilisateurs</h2>
        </div>
      </a>
      <div class="col-6">
        <a href="/admin-posts">
          <div class="square-card bg-secondary">
            <i class="fas fa-newspaper"></i>
          </div>
          <h2 class="text-center text-secondary mt-5">Gestion des articles</h2>
        </a>
      </div>
    </div>
  </div>

</div>
