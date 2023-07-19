<?php foreach ($posts as $post) : ?>
  <div class="col-4">
    <div class="post-view mb-5">
      <a href="/post?id=<?php echo $post['id']; ?>">
        <div class="post-picture lazy" style="background-image: url(&quot;assets/img/jsp.png&quot;);"></div>
        <div class="post-desc pl-4">
          <h3 class="h3"><?php echo $post['title']; ?></h3>
          <p><?php echo $post['description']; ?></p>
          <div class="date text-secondary"><?php echo date_format(date_create($post['created_at']), "d F"); ?></div>
        </div>
      </a>
    </div>
  </div>
<?php endforeach; ?>
