<?php foreach ($posts as $post) : ?>
  <div class="col-4">
    <div class="post-view mb-5">
      <div class="h2">
        <a href="/post?id=<?php echo $post['id']; ?>">
          <div class="post-picture lazy" style="background-image: url(&quot;assets/img/jsp.png&quot;);"></div>
          <div class="post-desc pl-4">
            <div class="h3"><?php echo $post['title']; ?></div>
            <p><?php echo $post['description']; ?></p>
            <div class="date"><?php echo date_format(date_create($post['created_at']), "d F"); ?></div>
          </div>
        </a>
      </div>
    </div>
  </div>
<?php endforeach; ?>
