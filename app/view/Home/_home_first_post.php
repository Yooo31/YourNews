<div class="d-flex col-7">
  <img src="assets/img/jsp.png" class="first-picture" alt="Viens lire le dernier article publier sur YourNews">
</div>
<div class="col-5 first-article-info">
  <a href="/post?id=<?php echo $post['id']; ?>">
    <h2 class="first-post-title mb-4 mt-0"><?php echo $post['title']; ?></h2>
    <p class="first-post-desc"><?php echo $post['description']; ?></p>
    <div class="date text-secondary"><?php echo date_format(date_create($post['created_at']), "d F"); ?></div>
  </a>
</div>
