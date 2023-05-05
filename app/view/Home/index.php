<?php var_dump($posts); ?>

<?php if ($post) { ?>
  <div class="container mt-5 mb-5">
    <div class="row align-items-center justify-content-center">
      <?php require_once '_home_first_post.php'; ?>
    </div>
  </div>
  <div class="container mt-5 mb-5">
    <div class="row">
    <?php $posts ? require_once '_home_posts.php' : ''; ?>
    </div>
  </div>
<?php } else {
  require_once '_home_empty.php';
} ?>
