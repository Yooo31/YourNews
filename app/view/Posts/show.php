<div id="post-show">

  <div class="container">
    <div class="row">
      <div class="col">
        <a href="/posts" class="btn">
          <i class="fas fa-angle-double-left"></i>
          Retour à la liste
        </a>
      </div>
      <div class="col text-right">
        <?php if ($post['user_id'] == $_SESSION["user_id"])  { ?>
          <form method="post" action="/post-delete">
            <input type="hidden" name="postId" value="<?php echo $post['id']; ?>">
            <button class="btn btn-delete" type="submit">
              <i class="fas fa-trash-alt"></i>
              Supprimer
            </button>
          </form>
        <?php } ?>
      </div>
    </div>
  </div>

  <div class="container mt-5">
    <div class="row">
      <div class="col text-center">
        <h1><?php echo $post['title']; ?></h1>

        <p class="post-desc"><em><?php echo $post['description']; ?></em></p>

        <hr>
      </div>
    </div>
  </div>

  <div class="container mt-5 post-content" style="max-width: 60%;">
    <?php echo $post['content']; ?>
  </div>

  <div class="container">
    <hr>
  </div>

  <div class="container post-end">

    <div class="row mb-3">
      <div class="col">
        <h2><span class="text-gray-i">Par </span><?php echo $post['creator_username']; ?></h2>
      </div>
      <div class="col text-right">
        <p class="text-secondary">Le <?php echo date_format(date_create($post['created_at']), "d F"); ?></p>
      </div>
    </div>

    <div class="row mb-3">
      <div class="col text-center">
        <p class="text-gray mt-5">L'écriture est un cri silencieux qui crie à travers les mots." - Khalil Gibran</p>
      </div>
    </div>

  </div>
</div>
