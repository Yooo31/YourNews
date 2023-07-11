<?php

require_once 'core/Controller.php';
require_once 'app/model/Admin.php';

class AdminController extends Controller {
  public function index() {
    $this->view('Admin/index');
  }

  public function getRoles() {
    $this->view('Admin/roles');
  }

  public function getPosts() {
    $this->view('Admin/posts');
  }

  public function getAccounts() {
    $this->view('Admin/accounts');
  }
}
