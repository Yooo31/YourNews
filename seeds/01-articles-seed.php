<?php

require_once 'seeds/script/Seed.php';

$now = date('Y-m-d H:i:s');

$firstElement = [
  'user_id' => 1,
  'title' => 'Les merveilles de la nature',
  'description' => 'Découvrez la beauté de la nature dans toute sa splendeur. Des paysages époustouflants et des animaux fascinants vous attendent',
  'preview' => 'jsp',
  'content' => "Laissez-vous émerveiller par les vastes étendues de forêts verdoyantes, les sommets enneigés des montagnes majestueuses, et les eaux cristallines des rivières. Observez les oiseaux multicolores virevolter dans le ciel et les créatures sauvages vivre en harmonie avec leur environnement. La nature est une source inépuisable de surprises et d'émerveillement.",
  'created_at' => $now,
  'updated_at' => $now,
];

$seeder = new Seeder();
try {
  $seeder->seed([$firstElement], 'articles', 'title');
} catch (Exception $e) {
  echo $e->getMessage() . PHP_EOL;
}
