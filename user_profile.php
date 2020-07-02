<?php
  require "header.php";
  require 'includes/dbh.inc.php';
?>

<?php
  if(isset($_SESSION['userId'])){
    ?>
    <main>
      <div class="main-container">
          <h1>This is your profile <?php echo "<span styles='color: #81c3ff;'>".$_SESSION['userUid']."</span>"; ?> </h1>
          <?php
          echo "<h2>Your stories:</h2>";

          // list all posts both published and not-published and sort them by date of creation
          // enlarge/open article on click
          $sql = "SELECT * FROM posts WHERE id_author=".$_SESSION['userId'];
          $result = mysqli_query($conn, $sql);
          $resultCheck = mysqli_num_rows($result);

          if($resultCheck > 0){ ?>
            <ul class="post-link-list">
            <?php while($row = mysqli_fetch_assoc($result)){ ?>
              <li> <?php
                echo "<a href='post.php?id=" . $row["id_post"] . "'><strong>" . $row["title"] . "</strong>";
                echo "<em> by " . $_SESSION["userUid"] ."</em>";
                echo " Created: " . $row["created_at"];
                echo " Views: " . $row["views"];
                echo " &#9829;: " . $row["likes"];
                $previewText = nl2br(substr($row["article"],0 , 90));
                echo "<div>" . $previewText;
                if(strlen($row["article"]) > 90){echo " [...]";}
                echo "</div>";
                echo "</a>";  ?>
              </li>
            <?php  }
          }else{
            echo "You haven't shared any stories with us yet.";
          } ?>
        </ul>
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
