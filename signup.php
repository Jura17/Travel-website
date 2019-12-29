<?php
  require "header.php";
 ?>
<div class="main-container">
  <h2>Sign Up</h2>
  <form action="includes/signup.inc.php" method="POST">
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
  <h4 style="margin-top: 3em;">Do you already have an account?</h4>
    <h2>Login</h2>
    <form action="includes/login.inc.php" method="POST">
      <div>
        <input type="mailuid" name="mailuid" placeholder="Email/Username">
      </div>
      <div>
        <input type="password" name="pwd" placeholder="Password">
      </div>
      <button type="submit" name="login-submit">Login</button>
    </form>
</div>

<?php
  require "footer.php";
 ?>
