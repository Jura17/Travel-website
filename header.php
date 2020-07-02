<?php
  session_start();
 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta name="theme-color" content="#60a1dd">
     <title>Hello Nihon!</title>
     <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto&display=swap">
     <link rel="stylesheet" type="text/css" href="includes/styles.css">
   </head>
   <body>
     <!-- <img id="landing-page-img" src="img/landing.jpg" alt=""> -->
     <header>
       <nav>
         <div class="navbar">
           <div class="brand-logo"><a href="index.php"<strong>HELLO<br>NIHON</strong></a></div>
           <!-- <img id="logo" src="img/logo-1.svg" alt="Logo of the app"> -->
           <div class="login">

               <?php
                 if(!isset($_SESSION['userId'])){
                   echo "<a class='user-profile-link' href='signup.php'>";
                   echo "<span id='login-glyph'><img src='https://img.icons8.com/ios-glyphs/30/000000/user--v1.png'></span>Signup/Login</a>";
                 }else{
                   echo "<a href='user_profile.php'>";
                   echo "<span id='login-glyph'><img src='https://img.icons8.com/ios-glyphs/30/000000/user--v1.png'></span><span class='user-profile-link'>".$_SESSION['userUid']."</span></a>";
                 }

                if(isset($_SESSION['userId'])){
                 echo '<form class="logout" action="includes/logout.inc.php" method="POST">
                  <input class="logout-button" type="submit" name="logout-submit" value="Logout">
                  </form>';
                }
              ?>
           </div>
           <a href="#" class="toggle-button">
             <span class="bar"></span>
             <span class="bar"></span>
             <span class="bar"></span>
           </a>
           <div class="navbar-links">
             <ul>
               <li><a href="index.php">Home</a></li>
               <li><a href="tell_story.php">Your story</a></li>
               <li><a href="browse_story.php">Browse</a></li>
               <li><a href="#">Japan now</a></li>
               <li><a href="about.php">About</a></li>
             </ul>
           </div>
         </div>
       </nav>
     </header>
