<div class="d-flex col-7">
  <img src="assets/img/jsp.png" class="first-picture" alt="Viens lire le dernier article publier sur YourNews">
</div>
<div class="col-3 first-article-info">
  <a href="#">
    <h2 class="first-post-title mb-4 mt-0"><?php echo $post['title']; ?></h2>
    <h3 class="first-post-desc"><?php echo $post['title']; ?></h3>
    <div class="date"><?php echo date_format(date_create($post['created_at']), "d F"); ?></div>
  </a>
</div>
