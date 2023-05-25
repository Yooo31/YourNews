<?php

require_once 'core/Controller.php';
require_once 'app/model/Auth.php';

class AuthController extends Controller {
  public function showLoginForm() {
    $this->view('Auth/login', ['error' => 0]);
  }

  public function login() {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $authModel = new Auth();
    $user = $authModel->getUserByUsername($username);

    if (!$user || !password_verify($password, $user['password'])) {
      $this->view('Auth/login', ['error' => 1]);
    } else {
      $_SESSION["is_connected"] = true;
      $this->view('Auth/auth_succes');
    }
  }

  public function showRegistrationForm() {
    $this->view('Auth/register');
  }

  public function register() {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
  }
}

