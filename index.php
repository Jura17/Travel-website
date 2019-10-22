<?php

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Welcome to Nihon Ni</title>
    <link rel="stylesheet" href="css/styles.css">

  </head>
  <body>
    <img id="landing-page-img" src="img/landing.jpg" alt="">
    <nav class="navbar">
      <img id="logo" src="img/logo-1.svg" alt="Logo of the app">
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">Japan now</a></li>
        <li><a href="#">Stories</a></li>
        <li><a href="#">About</a></li>
      </ul>
      <div class="login">
          <h2><span id="login-glyph"><img src="https://img.icons8.com/ios-glyphs/60/000000/user--v1.png"></span>Login/Sign Up</h2>

      </div>
    </nav>
    <div class="main-container">
      <h1>Connecting Japan travelers all around the world</h1>
      <div>
        <input type="button" name="new" value="Tell your story">
      </div>
      <div>
        <input type="button" name="recent" value="Most recent story">
      </div>
      <div>
        <input type="button" name="popular" value="Most popular story">
      </div>
      <div>
        <input type="text" name="search" placeholder="Look up a story...">
      </div>
    </div>
    <script src="js/main.js" charset="utf-8"></script>
  </body>
</html>
