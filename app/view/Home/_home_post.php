<div class="post">
  <h2><?php echo $post['title']; ?></h2>
  <span class="date"><?php echo date_format(date_create($post['created_at']), "d F"); ?></span>
</div>
