<?php

require_once 'core/Controller.php';
require_once 'app/model/Posts.php';

class PostsController extends Controller {
  public function index() {
    $postsModel = new Posts();
    $latestArticles = $postsModel->getListArticles(9, 0);

    $this->view('Posts/index', ['posts' => $latestArticles]);
  }

  public function new() {
    $this->view('Posts/new');
  }

  public function show() {
    $path = $_SERVER['REQUEST_URI'];
    $parts = explode('/', $path);
    $word = end($parts);

    $postsModel = new Posts();
    $article = $postsModel->getPostBySlug($word);

    $this->view('Posts/show', ['post' => $article]);
  }

  public function create() {
    $titre = $_POST['title'];
    $description = $_POST['description'];
    $postArea = $_POST['postArea'];

    $postModel = new Posts();
    $success = $postModel->createPost($titre, $description, $postArea);

    if ($success) {
      $this->view('Posts/index');
    } else {
      echo "Erreur lors de la création du compte";
    }
  }
}
