<?php

require_once 'seeds/script/Seed.php';

$now = date('Y-m-d H:i:s');

$fifthElement = [
  'user_id' => 1,
  'title' => 'Art et Créativité',
  'description' => "Explorez l'univers artistique et découvrez des créations uniques et inspirantes.",
  'preview' => 'jsp',
  'content' => "De l'art abstrait moderne aux chefs-d'œuvre classiques, l'expression artistique ne connaît pas de limites. Plongez dans le monde coloré de l'art et trouvez l'inspiration pour votre propre créativité.",
  'created_at' => $now,
  'updated_at' => $now,
];

$seeder = new Seeder();
try {
  $seeder->seed([$fifthElement], 'articles', 'title');
} catch (Exception $e) {
  echo $e->getMessage() . PHP_EOL;
}
