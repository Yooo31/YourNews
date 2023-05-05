<?php foreach ($posts as $post) : ?>
  <div class="col-4">
    <div class="post-view">
      <a href="#">
        <div class="post-picture lazy" style="background-image: url(&quot;assets/img/jsp.png&quot;);"></div>
        <div class="post-desc">
          <div class="h3"><?php echo $post['title']; ?></div>
          <p><?php echo $post['description']; ?></p>
          <div class="date"><?php echo date_format(date_create($post['created_at']), "d F"); ?></div>
        </div>
      </a>
    </div>
  </div>
<?php endforeach; ?>