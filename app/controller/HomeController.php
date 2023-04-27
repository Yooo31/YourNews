<?php

require_once 'core/Controller.php';

class HomeController extends Controller {
  public function index() {
    // $homeModel = new Home();
    // $latestArticles = $homeModel->getLatestArticles(6);

    $this->view('home');
  }
}
