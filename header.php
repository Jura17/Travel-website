<?php
  session_start();
 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
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
             <p><span id="login-glyph"><img src="https://img.icons8.com/ios-glyphs/30/000000/user--v1.png"></span>
               <?php
               if(!isset($_SESSION['userId'])){
                 echo "<a href='signup.php'>";
               }else{
                 echo "<a href='user_profile.php'>";
               }
                 ?>
               <!-- needs a check if user is logged in or not. When logged in send user to profile instead of signup.php -->
               <?php
               if(isset($_SESSION['userId'])){
                  echo $_SESSION['userUid'];
               }else{
                 echo 'Signup/Login';
               }
               ?>
             </a></p>
            <?php
            if(isset($_SESSION['userId'])){
             echo '<form class="logout" action="includes/logout.inc.php" method="POST">
              <button type="submit" name="logout-submit">Logout</button>
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
               <li><a href="#">Japan now</a></li>
               <li><a href="#">Stories</a></li>
               <li><a href="#">About</a></li>
             </ul>
           </div>
         </div>
       </nav>
     </header>
