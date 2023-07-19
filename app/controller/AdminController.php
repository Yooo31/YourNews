<?php

require_once 'core/Controller.php';
require_once 'app/model/Admin.php';
require_once 'app/model/Auth.php';
require_once 'app/model/Posts.php';

class AdminController extends Controller {
  public function index() {
    $this->view('Admin/index');
  }

  public function show() {
    $id = $_GET['id'];

    $postsModel = new Posts();
    $article = $postsModel->getPostById($id);

    $this->view('Admin/show', ['post' => $article]);
  }

  public function getRoles() {
    $this->view('Admin/roles');
  }

  public function getPosts() {
    $postsModel = new Posts();
    $allArticles = $postsModel->getallArticles();

    $this->view('Admin/posts', ['posts' => $allArticles]);
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

  public function rejectPost() {
    $elementId = $_POST['postId'];
    $reason_for_ban = $_POST['reason_for_ban'];
    $moderatorId = $_SESSION["user_id"];

    $adminModel = new Admin();
    $success = $adminModel->addElement($elementId, $reason_for_ban, $moderatorId);

    if ($success) {
      $postModel = new Posts();
      $success = $postModel->blockPost($elementId);

      if ($success) {
        header('Location: /admin-posts');
        exit();
      } else {
        echo "Erreur lors de la modification du statut";
      }
    } else {
      echo "Erreur lors de l'ajout à la table Modération";
    }
  }

  public function approvePost() {
    $elementId = $_POST['postId'];
    $moderatorId = $_SESSION["user_id"];

    $postModel = new Posts();
    $success = $postModel->authorizePost($elementId);

    if ($success) {
      header('Location: /admin-posts');
      exit();
    } else {
      echo "Erreur lors de l'ajout à la table Modération";
    }
  }
}
