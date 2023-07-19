<div class="container">
  <?php if ($post['user_id'] == $_SESSION["user_id"])  { ?>
    <form method="post" action="/post-delete">
      <input type="hidden" name="postId" value="<?php echo $post['id']; ?>">
      <button type="submit">Supprimer</button>
    </form>
  <?php } ?>

  <div class="row">
    <div class="col-6">
      <div class="post-view mb-5">
        <div class="h2">
          <div class="post-desc pl-4">
            <div class="h3"><?php echo $post['title']; ?></div>
            <p><?php echo $post['description']; ?></p>
            <div class="date">
              <span><?php echo date_format(date_create($post['created_at']), "d F"); ?></span>
              <span><?php echo $post['creator_username']; ?></span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container mt-5 post-content">
  <?php echo $post['content']; ?>
</div>
