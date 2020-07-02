<?php
  require "header.php";
  require "includes/dbh.inc.php";
?>

<main>
  <div class="main-container">
    <section>
      <?php
        if(isset($_SESSION['userId'])){
          echo "<h1>Read about other traveler's journeys</h1>";
          // list all articles in 'posts' that are published and sort them by date of creation
          // enlarge/open article on click
          if(isset($_SESSION['userId'])){

                  // list all posts both published and not-published and sort them by date of creation
                  // usort() and strtotime() might be useful
                  // enlarge/open article on click
                  $sql = "SELECT * FROM posts";
                  $result = mysqli_query($conn, $sql);
                  $resultCheck = mysqli_num_rows($result);

                  if($resultCheck > 0){ ?>
                    <ul class="post-link-list"> <?php
                    while($row = mysqli_fetch_assoc($result)){
                      if($row["published"]){ ?>
                        <li> <?php
                          echo "<a href='post.php?id=" . $row["id_post"] . "'><strong>" . $row["title"] . "</strong>";
                          echo "<em> by " . $row["uid_author"] ."</em>";
                          echo " Created: " . $row["created_at"];
                          echo " Views: " . $row["views"];
                          echo " &#9829;: " . $row["likes"];
                          $previewText = nl2br(substr($row["article"],0 , 90));
                          echo "<div>" . $previewText;
                          if(strlen($row["article"]) > 90){echo " [...]";}
                          echo "</div>";
                          echo "</a>";  ?>
                        </li> <?php
                      }
                    }
                    ?> </ul> <?php
                  }else{
                    echo "You haven't shared any stories with us yet.";
                  }

          }
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
