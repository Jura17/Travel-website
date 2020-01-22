<?php
  require "header.php";
?>

<?php
  if(isset($_SESSION['userId'])){
    ?>
    <main>
      <div class="main-container">
        <section>
          <h1>
            This is your profile
            <?php
            echo "<span styles='color: #81c3ff;'>".$_SESSION['userUid']."</span>";
            ?>
          </h1>
        </section>
      </div>
    </main>
    <?php
  }else{
    header("Location: index.php");
    exit();
  }
  ?>

<?php
  require "footer.php";
?>
