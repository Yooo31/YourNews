<?php

require_once 'core/Controller.php';
require_once 'app/model/Posts.php';
require_once 'app/model/DeletedPost.php';
require_once 'app/model/Auth.php';

class PostsController extends Controller {
  public function index() {
    $postsModel = new Posts();
    $latestArticles = $postsModel->getListArticles(9, 0);

    $this->view('Posts/index', ['posts' => $latestArticles]);
  }

  public function show() {
    $id = $_GET['id'];

    $postsModel = new Posts();
    $article = $postsModel->getPostById($id);

    $this->view('Posts/show', ['post' => $article]);
  }

  public function new() {
    $this->view('Posts/new');
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

  public function delete() {
    $elementId = $_POST['postId'];
    $userId = $_SESSION["user_id"];

    $postsModel = new Posts();
    $success = $postsModel->deletePost($elementId);

    if ($success) {
      $deletedPostModel = new DeletedPost();
      $success = $deletedPostModel->createPost($userId, $elementId);

      if ($success) {
        header('Location: /posts');
        exit();
      } else {
        echo "Erreur lors de suppression";
      }
    }
  }
}
