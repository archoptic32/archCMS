<?php

require( "config.php" );
session_start();
$action = isset( $_GET['action'] ) ? $_GET['action'] : "";
$username = isset( $_SESSION['username'] ) ? $_SESSION['username'] : "";

if ( $action != "login" && $action != "logout" && !$username ) {
  login();
  exit;
}

switch ( $action ) {
  case 'login':
    login();
    break;
  case 'logout':
    logout();
    break;
  case 'newArticle':
    newArticle();
    break;
  case 'editArticle':
    editArticle();
    break;
  case 'deleteArticle':
    deleteArticle();
    break;
  default:
    listArticles();
}


function login() {
  $results = array();
  $results['pageTitle'] = "archCMS";
  if ( isset( $_POST['login'] ) ) {
    if ( $_POST['username'] == ADMIN_USERNAME && $_POST['password'] == ADMIN_PASSWORD ) {
      $_SESSION['username'] = ADMIN_USERNAME;
      header( "Location: admin.php" );
    } else {
      $results['errorMessage'] = "Access denied: incorrect details.";
      require( TEMPLATE_PATH . "/admin/loginForm.php" );
    }
  } else {
    require( TEMPLATE_PATH . "/admin/loginForm.php" );
  }
}

function logout() {
  unset( $_SESSION['username'] );
  header( "Location: admin.php" );
}

function newArticle() {
  $results = array();
  $results['pageTitle'] = "New Article";
  $results['formAction'] = "newArticle";
  if ( isset( $_POST['saveChanges'] ) ) {
    $article = new Article;
    $article->storeFormValues( $_POST );
    $article->insert();
    header( "Location: admin.php?status=changesSaved" );
  } elseif ( isset( $_POST['cancel'] ) ) {
    header( "Location: admin.php" );
  } else {
    $results['article'] = new Article;
    require( TEMPLATE_PATH . "/admin/editArticle.php" );
  }
}

function editArticle() {
  $results = array();
  $results['pageTitle'] = "Edit Article";
  $results['formAction'] = "editArticle";

  if ( isset( $_POST['saveChanges'] ) ) {
    if ( !$article = Article::getById( (int)$_POST['articleId'] ) ) {
      header( "Location: admin.php?error=articleNotFound" );
      return;
    }
    $article->storeFormValues( $_POST );
    $article->update();
    header( "Location: admin.php?status=changesSaved" );
  } elseif ( isset( $_POST['cancel'] ) ) {
    header( "Location: admin.php" );
  } else {
    $results['article'] = Article::getById( (int)$_GET['articleId'] );
    require( TEMPLATE_PATH . "/admin/editArticle.php" );
  }
}

function deleteArticle() {
  if ( !$article = Article::getById( (int)$_GET['articleId'] ) ) {
    header( "Location: admin.php?error=articleNotFound" );
    return;
  }
  $article->delete();
  header( "Location: admin.php?status=articleDeleted" );
}

function listArticles() {
  $results = array();
  $data = Article::getList();
  $results['articles'] = $data['results'];
  $results['totalRows'] = $data['totalRows'];
  $results['pageTitle'] = "All Articles";
  if ( isset( $_GET['error'] ) ) {
    if ( $_GET['error'] == "articleNotFound" ) $results['errorMessage'] = "Error: That post cannot be found.";
  }
  if ( isset( $_GET['status'] ) ) {
    if ( $_GET['status'] == "changesSaved" ) $results['statusMessage'] = "Your changes have been saved.";
    if ( $_GET['status'] == "articleDeleted" ) $results['statusMessage'] = "That post has been deleted.";
  }
  require( TEMPLATE_PATH . "/admin/listArticles.php" );
}
?>