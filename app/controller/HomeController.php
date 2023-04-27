<?php

require_once 'core/Controller.php';
require_once 'app/model/Home.php';

class HomeController extends Controller {
  public function index() {
    $homeModel = new Home();
    $latestArticle = $homeModel->getLatestArticle();
    $latestArticles = $homeModel->getLatestArticles(6);

    $this->view('Home/index', ['latestArticle' => $latestArticle, 'latestArticles' => $latestArticles]);
  }
}
