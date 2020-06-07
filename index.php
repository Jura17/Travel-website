<?php
  require "header.php";
 ?>

<main>
 <div class="main-container">
   <section>
     <?php
        $fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        if(strpos($fullUrl, "login=success") == true){
          echo "<p>Welcome back, ".$_SESSION['userUid']."!</p>";
        }else if(strpos($fullUrl, "signup=success") == true){
          echo "<p>Successfully signed up! Welcome to the gang ".$_SESSION['userUid']."!";
        }
     ?>
   </section>
   <h1>Connecting Japan travelers all around the world</h1>
   <!-- test -->
   <div>
     <input class="landing-input" onclick="window.location.href = 'tell_story.php'" type="button" name="new" value="Tell your story">
   </div>
   <div>
     <input class="landing-input" onclick="window.location.href = 'browse_story.php'" type="button" name="recent" value="Browse stories">
   </div>
 </div>
</main>

<?php
  require "footer.php";
 ?>
