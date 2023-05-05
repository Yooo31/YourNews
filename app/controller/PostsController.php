<?php

require_once 'core/Controller.php';

class PostsController extends Controller {
  public function index() {
    $this->view('Home/index');
  }
}
