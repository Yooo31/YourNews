<?php var_dump($posts); ?>

<?php if ($post) { ?>
  <div class="container">
    <div class="row">
      <?php require_once '_home_first_post.php'; ?>
    </div>
    <div class="row">
    <?php $posts ? require_once '_home_posts.php' : ''; ?>
    </div>
  </div>
<?php } else {
  require_once '_home_empty.php';
} ?>