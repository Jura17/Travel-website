<?php
  require "header.php";
?>

<main>
  <div class="main-container">
    <section>
      <?php
        if(isset($_SESSION['userId'])){
          echo '<h1>Welcome</h1><p>Tell us your story here</p>';
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
