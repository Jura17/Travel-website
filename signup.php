<?php
  require "header.php";
 ?>

<div class="main-container">
  <h2>Sign Up</h2>
  <form action="signup.inc.php" method="POST">
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
</div>
