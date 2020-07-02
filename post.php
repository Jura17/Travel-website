<?php
  include "header.php";
  include "includes/dbh.inc.php";
?>

<?php
  if(isset($_SESSION['userId'])){ ?>
    <main>
      <div class="main-container">
        <?php
          $sql = "SELECT * FROM posts WHERE id_post=" . $_GET['id'];
          $result = mysqli_query($conn, $sql);
          $resultCheck = mysqli_num_rows($result);

          if($resultCheck > 0){
            while($row = mysqli_fetch_assoc($result)){
              echo "<div class='post-page-container'>";
              echo "<h2>" . $row['title'] . "</h2>";
              echo "<div>" . nl2br($row['article']) ."</div>";
              echo "</div>";
            }
          }
        ?>

      </div>
    </main>

<?php
  }else{
    header("Location: index.php");
    exit();
  }
 ?>
<?php include "footer.php" ?>
