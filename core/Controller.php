<?php

class Controller {
  protected function view($view, $data = []) {
    extract($data);
    require_once "app/view/$view.php";
  }
}
