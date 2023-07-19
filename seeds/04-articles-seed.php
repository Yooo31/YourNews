<?php

require_once 'seeds/script/Seed.php';

$now = date('Y-m-d H:i:s');

$forthElement = [
  'user_id' => 1,
  'title' => 'La science de demain',
  'description' => "Plongez dans le futur avec des découvertes scientifiques incroyables. Des avancées technologiques aux nouvelles frontières de la connaissance, explorez l'inconnu.",
  'preview' => 'jsp',
  'content' => "Les scientifiques explorent sans relâche les mystères de l'univers, des trous noirs aux particules subatomiques. Les avancées dans les domaines de la médecine, de la robotique et de l'intelligence artificielle transforment notre monde à une vitesse vertigineuse. Découvrez comment la science ouvre de nouvelles perspectives et façonne notre avenir.",
  'created_at' => $now,
  'updated_at' => $now,
];

$seeder = new Seeder();
try {
  $seeder->seed([$forthElement], 'articles', 'title');
} catch (Exception $e) {
  echo $e->getMessage() . PHP_EOL;
}
