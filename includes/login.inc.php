<?php
if(isset($_POST['login-submit'])){

  require 'dbh.inc.php';

  $mailuid = $_POST['mailuid'];
  $password = $_POST['pwd'];

  if(empty($mailuid) || empty($password){
    header("Location: ../login.php?error=emptyfields");
    exit();
  }else{

  }
  
}else{
  header("Location: ../signup.php");
  exit();
}
?>
