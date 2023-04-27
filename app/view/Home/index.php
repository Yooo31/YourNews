<!DOCTYPE html>
<html>
  <head>
    <title>Page d'accueil</title>
  </head>
  <body>
    <h1>Bienvenue sur notre site web</h1>
    <p>Voici quelques informations sur notre entreprise :</p>

    <?php var_dump($posts); ?>

    <?php
      if ($post) {
        require_once '_home_first_post.php';

        $posts ? require_once '_home_posts.php' : '';
      } else {
        require_once '_home_empty.php';
      }

    ?>

  </body>
</html>
