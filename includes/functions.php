<?php
require_once 'dbh.inc.php';

// ###########################


function savePostToDb($cleanTitle, $cleanBody, $username, $userId, $published){
  global $conn;
  $sql = "INSERT INTO posts (title, article, uid_author, id_author, published)
          VALUES (?, ?, ?, ?, ?);";
  $stmt = mysqli_stmt_init($conn);
  if(!mysqli_stmt_prepare($stmt, $sql)){
    header("Location: ../tell_story.php?error=sqlError");
    exit();
  }else{
    mysqli_stmt_bind_param($stmt, "sssii", $cleanTitle, $cleanBody, $username, $userId, $published);
    mysqli_stmt_execute($stmt);
  }

  mysqli_stmt_close($stmt);
  mysqli_close($conn);
}
