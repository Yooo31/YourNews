<!DOCTYPE html>
<html>
  <head>
    <title>Page d'accueil</title>
  </head>
  <body>
    <h1>Bienvenue sur notre site web</h1>
    <p>Voici quelques informations sur notre entreprise :</p>

    <?php var_dump($latestArticles); ?>

    <?php if ($latestArticles) : ?>
      <?php foreach ($latestArticles as $article) : ?>
        <?php include '_home_post.php'; ?>
      <?php endforeach; ?>
    <?php else : ?>
      <span>Aucun article pour le moment</span>
    <?php endif; ?>
  </body>
</html>
