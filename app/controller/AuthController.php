<?php

require_once 'core/Controller.php';

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
      // Mauvaise authentification, afficher un message d'erreur ou rediriger vers la page de connexion
    } else {
      // Authentification réussie, connecter l'utilisateur (par exemple, en créant une session) et rediriger vers une page sécurisée
    }
  }
}

