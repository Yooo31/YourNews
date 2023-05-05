<div class="col-12">
  <div class="post">
    <img src="assets/img/<?php $post['preview']?>.png" alt="">
    <h2><?php echo $post['title']; ?></h2>
    <h3><?php echo $post['description']; ?></h3>
    <span class="date"><?php echo date_format(date_create($post['created_at']), "d F"); ?></span>
  </div>
</div>