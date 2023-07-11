<?php

require_once 'core/Controller.php';
require_once 'app/model/Posts.php';
require_once 'app/model/Auth.php';

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
    $id = $_GET['id'];

    $postsModel = new Posts();
    $article = $postsModel->getPostById($id);

    $authModel = new Auth();
    $author = $authModel->getUserById($article['user_id']);

    $this->view('Posts/show', ['post' => $article, 'author' => $author['name']]);
  }

  public function create() {
    $titre = $_POST['title'];
    $description = $_POST['description'];
    $postArea = $_POST['postArea'];
    $user_id = $_SESSION["user_id"];

    $postModel = new Posts();
    $success = $postModel->createPost($titre, $description, $postArea, $user_id);

    if ($success) {
      $this->view('Posts/publication_success');
    } else {
      echo "Erreur lors de la création du compte";
    }
  }
}
