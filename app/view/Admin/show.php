<div class="container">
  <div class="row">
    <div class="col-6">
      <form method="POST" action="/admin-posts-approve">
        <input type="hidden" name="postId" value="<?php echo $post['id']; ?>">
        <input type="submit" name="unban" value="Valider">
      </form>
    </div>
    <div class="col-6">
      <button onclick="openPopUp()">Refuser</button>
    </div>
  </div>
</div>

<div class="container mt-5 post-content">
  <?php echo $post['content']; ?>
</div>
