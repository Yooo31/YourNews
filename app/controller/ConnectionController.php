<?php

require_once 'core/Controller.php';

class ConnectionController extends Controller {
  public function index() {
    $this->view('Connection/index');
  }
}
