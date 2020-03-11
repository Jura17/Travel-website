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
      <div id="tell-story-container">
      <form action="tell_story.php" method="POST">
        <input id="article-title" name="article-title" type="text" placeholder="Title of your story...">
        <label for="article-input-field">
        <textarea id="article-content" cols="100" rows="20" name="article-input-field" id="article-input-field" placeholder="Your story..." required></textarea><br>
        <input name="article-submit" type="submit">
      </form>
      <?php
        if(isset($_POST['article-input-field'])){
          $articleTitle = $_POST['article-title'];
          $articleText = $_POST['article-input-field'];
          strip_tags($articleTitle);
          strip_tags($articleText);
          echo '<h2>'.$articleTitle.'</h2>';
          echo '<p>'.$articleText.'</p>';
        }

      ?>
      <!-- after hitting submit the written article has to be fetched and saved in a variable. Use the $_POST variable for that.
      It then has to be checked for html or php code (e.g. by strip_tags()-function )
      Later it can be saved in the database -->
      <?php
        }else{
          header("Location: signup.php?error=notLoggedIn");
          exit();
        }
      ?>
      </div>
    </section>
  </div>
</main>

<?php
  require "footer.php";
?>
