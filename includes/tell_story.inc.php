<?php
  if(isset($_POST['save-article'])
  || isset($_POST['publish-article'])
  || isset($_POST['preview-article'])){
    session_start();
    require_once 'dbh.inc.php';
    require_once 'functions.php';

    $username = $_SESSION['userUid'];
    $published = 0;
    $userId = $_SESSION['userId'];
    $cleanTitle = strip_tags($_POST['article-title']);
    $cleanBody = strip_tags($_POST['article-body']);

    // this function escapes special characters like single-quotes.
    // It works but a regex expression would be even better

    // maybe I could use a Post class that contains all the parameters for a post.
    // the data gets submitted by the user and the instance of the class gets set by the session variable
    // I then pass the class instance to the SaveToPostDb function as the single parameter, where I access all the post data

  if (isset($_POST['publish-article'])) {
      $published = 1;
      savePostToDb($cleanTitle, $cleanBody, $username, $userId, $published);

      header("Location: ../browse_story.php?signup=published");
      exit();

  }else if(isset($_POST['save-article'])){
      savePostToDb($cleanTitle, $cleanBody, $username, $userId, $published);

      header("Location: ../browse_story.php?signup=postSaved");
      exit();
  }else if(isset($_POST['preview-article'])){
      // maybe echo out a large container that represents a page and print the whole post on it
  }else{
      echo "Nothing there";
  }
}

// if 'publish-article' was clicked set 'published' to 1 and redirect to profile/posts page
 ?>
