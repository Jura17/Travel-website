<?php
  require "header.php";
 ?>

<main>
 <div class="main-container">
   <section>
     <?php
        if(isset($_SESSION['userId'])){
          echo '<p class="login-status">You are logged in!</p>';
        }else{
          echo '<p class="login-status">You are logged out!</p>';
        }
     ?>
   </section>
   <h1>Connecting Japan travelers all around the world</h1>
   <div>
     <input class="landing-input" onclick="window.location.href = 'tell_story.php'" type="button" name="new" value="Tell your story">
   </div>
   <div>
     <input class="landing-input" onclick="window.location.href = 'browse_story.php'" type="button" name="recent" value="Browse stories">
   </div>
 </div>
 <script src="js/main.js" charset="utf-8"></script>
</main>

<?php
  require "footer.php";
 ?>
