<?php

require_once 'core/Controller.php';
require_once 'app/model/Posts.php';

class PostsController extends Controller {
  public function index() {
    $postsModel = new Posts();
    $latestArticles = $postsModel->getListArticles(9, 0);

    $this->view('Posts/index', ['posts' => $latestArticles]);
  }
}
