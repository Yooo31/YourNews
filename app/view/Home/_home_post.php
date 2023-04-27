<div class="posts">
  <?php foreach ($posts as $post) : ?>
    <div class="post">
      <h2><?php echo $post['title']; ?></h2>
      <img src="<?php echo $post['image']; ?>" alt="">
      <span class="date"><?php echo strftime("%d %B", strtotime($post['created_at'])); ?></span>
    </div>
  <?php endforeach; ?>
</div>
