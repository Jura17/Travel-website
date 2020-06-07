<?php
  require "header.php";
 ?>
<div class="main-container">
  <?php

if(isset($_GET['error'])){
  if($_GET['error'] == 'emptyfields'){
    echo '<p class="error-message">Please fill in all fields!</p>';
  }elseif($_GET['error'] == 'invalidEmailUid'){
    echo '<p class="error-message">Username and Email are invalid!</p>';
  }elseif($_GET['error'] == 'invalidEmail'){
    echo '<p class="error-message">Please enter a valid Email address!</p>';
  }elseif($_GET['error'] == 'invalidUid'){
    echo '<p class="error-message">Please enter a valid username!</p>';
  }elseif($_GET['error'] == 'passwordCheck'){
    echo "<p class='error-message'>The passwords don't match!</p>";
  }elseif($_GET['error'] == 'notLoggedIn'){
    echo "<p class='error-message'>Please login or sign up first!</p>";
  }else{
    echo "<p class='error-message'>An error occured</p>";
  }
}

  //_____________ regex alternative ____________
  // if(isset($_SERVER['REQUEST_URI'])){
  //   $url = $_SERVER['REQUEST_URI'];
  //   if(preg_match('/error=emptyfields/', $url)){
  //     echo '<p class="error-message">Please fill out all fields!</p>';
  //   }else if(preg_match('/error=usernameTaken/', $url)){
  //     echo '<p class="error-message">Username already taken!</p>';
  //   }else if(preg_match('/error=invalidEmailUid/', $url)){
  //     echo '<p class="error-message">Username and Email are invalid!</p>';
  //   }else if(preg_match('/error=invalidEmail/', $url)){
  //     echo '<p class="error-message">Given Email is invalid!</p>';
  //   }else if(preg_match('/error=invalidUid/', $url)){
  //     echo '<p class="error-message">Given Username is invalid!</p>';
  //   }else if(preg_match('/error=passwordCheck/', $url)){
  //     echo "<p class='error-message'>Passwords don't match!</p>";
  //   }else{
  //     echo '<p class="error-message">Something went wrong...</p>';
  //   }
  // }

  if(!isset($_SESSION['userId'])){
  echo '<h2>Sign Up</h2>
  <form id="sign-up-form" action="includes/signup.inc.php" method="POST">
    <div>
      <input type="text" name="uid" placeholder="Username">
    </div>
    <div>
      <input type="text" name="email" placeholder="Email">
    </div>
    <div>
      <input type="password" name="pwd" placeholder="Password">
    </div>
    <div>
      <input type="password" name="pwd-repeat" placeholder="Repeat password">
    </div>
    <button type="submit" name="signup-submit">Sign Up</button>
  </form>
  <h4 style="margin-top: 3em;">Do you already have an account?</h4>';

  if(isset($_GET['loginError'])){
    if($_GET['loginError'] == 'emptyfields'){
      echo '<p class="error-message">Please fill in all fields!</p>';
    }elseif($_GET['loginError'] == 'noUser'){
      echo '<p class="error-message">User not found!</p>';
    }elseif($_GET['loginError'] == 'wrongPwd'){
      echo '<p class="error-message">Wrong password!</p>';
    }elseif($_GET['loginError'] == 'sqlError'){
      echo "<p class='error-message'>An error occured while trying to login</p>";
    }
  }

  echo '<h2>Login</h2>
    <form id="login-form" action="includes/login.inc.php" method="POST">
      <div>
        <input type="text" name="mailuid" placeholder="Email/Username">
      </div>
      <div>
        <input type="password" name="pwd" placeholder="Password">
      </div>
      <button type="submit" name="login-submit">Login</button>
    </form>';
  }else{
    header('Location: index.php');
  }

    ?>

</div>
<script src="js/main.js" charset="utf-8"></script>

<?php
  require "footer.php";
 ?>
