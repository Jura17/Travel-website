<?php
  require "header.php";
?>

<main>
  <div class="main-container">
    <section>
      <?php
        if(isset($_SESSION['userId'])){
          echo '<h1>Tell us your story here</h1>';
      ?>
      <div id="tell-story-container">
      <form action="tell_story.php" method="POST">
        <input id="article-title" name="article-title" type="text" placeholder="Title of your story..." required >
        <label for="article-input-field">
        <textarea style="width: 100%;" id="article-content" cols="100" rows="20" name="article-input-field" id="article-input-field" placeholder="Your story..." required></textarea><br>
        <input id="clear-all-btn" class="landing-input" name="clear_all" onclick="Clear_all()" type="button" value="Clear all">
        <input id="submit-post-btn" class="landing-input" name="article-submit" type="submit" value="Preview">
      </form>

      <?php
        if(isset($_POST['article-submit'])){
          $articleTitle = $_POST['article-title'];
          $articleText = $_POST['article-input-field'];
          if($articleTitle !== "" && $articleText !== ""){
            $cleanHeading = strip_tags($articleTitle);
            $cleanText = strip_tags($articleText);
            echo '<div id="article-preview">';
            echo '<h2>'.$cleanHeading.'</h2>';
            echo '<p>'.$cleanText.'</p>';
            echo '</div>';
            echo '<form><input id="save-article-btn" type="submit" name="save-article" value="Save">
                  <input id="publish-article-btn" type="submit" name="publish-article" value="Save and publish"></form>';
          }
        }

      ?>

      <?php
        }else{
          header("Location: signup.php?error=notLoggedIn");
          exit();
        }
      ?>
      </div>
    </section>
  </div>
  <script src="js/functions.js" charset="utf-8"></script>
</main>

<?php
  require "footer.php";
?>
