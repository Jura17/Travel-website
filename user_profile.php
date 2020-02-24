<?php
  require "header.php";
  require 'includes/dbh.inc.php';
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
            echo "<h2>Your stories:</h2>";
            echo " <p>Is admin: ";
            if($_SESSION["isAdmin"]){
              echo " Yes</p>";
            }else{
              echo " No</p>";
            }

            $sql = "SELECT * FROM posts WHERE id_author=".$_SESSION['userId'];
            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);

            if($resultCheck > 0){
              while($row = mysqli_fetch_assoc($result)){
                echo "<div class='blog-post'><strong>".$row["title"]."</strong>";
                echo "<em> by ".$_SESSION["userUid"]."</em>";
                echo " Created: ".$row["created_at"];
                echo " Views: ".$row["views"];
                echo " &#9829;: ".$row["likes"];
                echo "<div>".$row["article"]."</div>";
                echo "</div>";
              }
            }else{
              echo "You haven't shared any stories with us yet.";
            }

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
