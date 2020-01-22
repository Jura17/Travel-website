<?php
if(isset($_POST['login-submit'])){

  require 'dbh.inc.php';

  $mailuid = $_POST['mailuid'];
  $password = $_POST['pwd'];

  // check if user didn't leave fields empty. If so, go back to login screen
  if(empty($mailuid) || empty($password)){
    header("Location: ../signup.php?error=emptyfields");
    exit();
  }else{
    // sql query: Select everything from the users table where the uidUsers or emailUsers is equal to $mailuid
    $sql = "SELECT * FROM users WHERE uidUsers=? OR emailUsers=?;";
    // initialize the statement
    $stmt = mysqli_stmt_init($conn);
    // check if the statement works together with the database connection
    if(!mysqli_stmt_prepare($stmt, $sql)){
      header("Location: ../signup.php?error=sqlError");
      exit();
    }else{
      // bind the data input by the user to the statement
      mysqli_stmt_bind_param($stmt, "ss", $mailuid, $mailuid);
      // execute the statement
      mysqli_stmt_execute($stmt);
      // store the result of the statement in $result
      $result = mysqli_stmt_get_result($stmt);
      // as the result is currently pure raw data, make an associative array of it that's easier to work with
      if($row = mysqli_fetch_assoc($result)){
        // hash the password the user typed in and compare it to the hashed password stored in the database
        $pwdCheck = password_verify($password, $row['pwdUsers']);
        if($pwdCheck == false){
          header("Location: ../signup.php?error=wrongPwd");
          exit();
        }else if($pwdCheck == true){
          session_start();
          $_SESSION['userId'] = $row['id'];
          $_SESSION['userUid'] = $row['uidUsers'];
          $_SESSION['userEmail'] = $row['emailUsers'];

          header("Location: ../index.php?login=success");
          exit();
        }else{
          header("Location ../signup.php?error=wrongPwd");
          exit();
        }
      }else{
        header("Location: ../signup.php?error=noUser");
        exit();
      }
    }
  }

}else{
  header("Location: ../signup.php");
  exit();
}
?>
