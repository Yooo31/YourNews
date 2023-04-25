<?php
// core/Controller.php

class Controller {
  public function view($viewName, $data = []) {
    extract($data);
    require_once "app/view/$viewName.php";
  }

  public function redirect($path) {
    header("Location: $path");
    exit;
  }
}
