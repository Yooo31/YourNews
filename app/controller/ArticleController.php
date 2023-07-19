<?php

class ArticleController {
  public function postDetails($slug) {
    $filePath = __DIR__ . '/../blog/converted/' . $slug . '.html';

    if (file_exists($filePath)) {
      echo file_get_contents($filePath);
    } else {
      header("HTTP/1.0 404 Not Found");
      echo "Désolé, la page que vous avez demandée n'existe pas.";
    }
  }
}
