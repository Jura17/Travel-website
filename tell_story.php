<?php
  require "header.php";
?>

<main>
  <div class="main-container">
    <section>
      <?php
        if(isset($_SESSION['userId'])){
          echo '<h1>Welcome</h1><p>Tell us your story here</p>';
      ?>
      <form action="tell_story.php" method="POST">
        <label for="article-input-field">
        <textarea id="article-input-field" placeholder="Your story..." required></textarea><br>
        <input type="submit" value="Save article">
      </form>
      <!-- after hitting submit the written article has to be fetched and saved in a variable. Use the $_POST variable for that.
      It then has to be checked for html or php code (e.g. by strip_tags()-function )
      Later it can be saved in the database -->
      <?php
        }else{
          header("Location: signup.php?error=notLoggedIn");
          exit();
        }
      ?>
    </section>
  </div>
</main>

<?php
  require "footer.php";
?>
