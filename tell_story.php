<?php
  require "header.php";
?>

<main>
  <div class="main-container">
      <?php
        if(isset($_SESSION['userId'])){
          echo '<h1>Tell us your story here</h1>';
       ?>
        <div class="article-form-container" id="article-form-container">
          <form class="article-form" id="article-form" action="includes/tell_story.inc.php" method="POST">
            <input class="article-title" id="article-title" name="article-title" type="text" placeholder="Title of your story..."  >
            <textarea class="article-body" id="article-body" col="100" rows="20" name="article-body" placeholder="Your story..." ></textarea><br>
          </form>

        <?php
          }else{
            header("Location: signup.php?error=notLoggedIn");
            exit();
          }
        ?>
      </div>

    <div class="article-side-panel" id="article-side-panel">
      <button class="article-btn" id="clear-all-btn" name="clear_all" onclick="Clear_all()">Clear all</button>
      <button class="article-btn" id="save-article-btn" form="article-form" name="save-article" type="submit">Save draft</button>
      <button class="article-btn" id="preview-article-btn" form="article-form" name="preview-article" type="submit">Preview</button>
      <button class="article-btn" id="publish-article-btn" form="article-form" name="publish-article" type="submit">Publish</button>
    </div>
  </div>
  <script src="js/functions.js" charset="utf-8"></script>
</main>

<?php
  require "footer.php";
?>
