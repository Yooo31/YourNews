<?php

require_once 'core/Controller.php';
require_once 'app/model/Admin.php';
require_once 'app/model/Auth.php';

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
    $authModel = new Auth();
    $allUsers = $authModel->getAllUsers();

    $this->view('Admin/accounts', ['users' => $allUsers]);
  }

  public function updateUser() {
    $colName = $_POST['colName'];
    $value = $_POST['value'];
    $elementId = $_POST['userId'];
    $reason_for_ban = $_POST['reason_for_ban'];

    $authModel = new Auth();
    $success = $authModel->updateUser($colName, $value, $elementId, $reason_for_ban);

    if ($success) {
      header('Location: /admin-accounts');
      exit();
    } else {
        echo "Erreur lors de la mise à jour du compte";
    }
  }
}
