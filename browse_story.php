<?php
  require "header.php";
  require "includes/dbh.inc.php";
?>

<main>
  <div class="main-container">
    <section>
      <?php
        if(isset($_SESSION['userId'])){
          echo "<h1>Welcome</h1><p>Read about other traveler's journeys</p>";
          // list all articles in 'posts' that are published and sort them by date of creation
          // enlarge/open article on click

          if(isset($_SESSION['userId'])){
            ?>
            <main>
              <div class="main-container">
                <section>

                  <?php

                    // list all posts both published and not-published and sort them by date of creation
                    // usort() and strtotime() might be useful
                    // enlarge/open article on click
                    $sql = "SELECT * FROM posts";
                    $result = mysqli_query($conn, $sql);
                    $resultCheck = mysqli_num_rows($result);

                    if($resultCheck > 0){
                      while($row = mysqli_fetch_assoc($result)){
                        if($row["published"]){
                          echo "<div class='blog-post'><strong>".$row["title"]."</strong>";
                          echo "<em> by ".$row["uid_author"]."</em>";
                          echo " Created: ".$row["created_at"];
                          echo " Views: ".$row["views"];
                          echo " &#9829;: ".$row["likes"];
                          echo "<div>".$row["article"]."</div>";
                          echo "</div>";
                        }
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
