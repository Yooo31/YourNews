<?php

require_once 'core/Controller.php';
require_once 'app/model/Auth.php';

class AuthController extends Controller {
  public function showLoginForm() {
    $this->view('Auth/login');
  }

  public function login() {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $authModel = new Auth();
    $user = $authModel->getUserByUsername($username);

    if (!$user || !password_verify($password, $user['password'])) {
      $this->view('Auth/login', ['message' => 'Erreur de mot de passe']);
    } else {
      $_SESSION["is_connected"] = true;
      $this->view('Auth/auth_succes');
    }
  }

  public function showRegistrationForm() {
    $this->view('Auth/register');
  }

  public function register() {
    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $username = $_POST['username'];
    $username = trim($username);
    $email = $_POST['email'];
    $email = trim($email);
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirm_password'];

    if ($password !== $confirmPassword) {
      $error = "Les mots de passe ne correspondent pas";
      $this->view('Auth/register', ['error' => $error]);
      return;
    }

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    $hashedPassword = trim($hashedPassword);

    $authModel = new Auth();

    $existingUser = $authModel->getUserByUsername($username);

    if ($existingUser) {
      $error = "L'utilisateur existe déjà";
      $this->view('Auth/register', ['error' => $error]);
      return;
    }

    $success = $authModel->createUser($email, $hashedPassword, $name, $lastname, $username);

    if ($success) {
      $this->view('Auth/registration_success');
    } else {
      $error = "Erreur lors de la création du compte";
      $this->view('Auth/register', ['error' => $error]);
    }
  }
}

