<?php
try {
  session_start();
  require("../connections/pdo.inc.php");
  $_user_id = $_SESSION['user_id'];
  $_postID = intval($_GET['q']);

  $_checkIfLikeAlreadyExists = "SELECT * FROM ts_users_likes_t_posts WHERE ts_users_d_user='$_user_id' AND t_posts_d_post='$_postID'";
  $_checkResult = $_PDO->query($_checkIfLikeAlreadyExists);
  $_numLikes = $_checkResult->rowCount();
  $_status = "";

  // the following blocks in the if else if statements could possibly benefit from applying DRY to them, but isn't neccessary
  if($_numLikes == 0) {
    $_addLike = "INSERT INTO ts_users_likes_t_posts VALUES ('$_user_id', '$_postID')";
    $_PDO->query($_addLike);
    $_status = "liked";
  } else if($_numLikes >= 1) {
    $_deleteLike = "DELETE FROM ts_users_likes_t_posts WHERE ts_users_d_user='$_user_id' AND t_posts_d_post='$_postID'"; 
    $_PDO->query($_deleteLike);
    $_status = "disliked";
  }

  $_getNumLikes = "SELECT * FROM ts_users_likes_t_posts WHERE t_posts_d_post='$_postID'";
  // get & display updated numlikes associated with the liked post
  $_checkResult1 = $_PDO->query($_getNumLikes);
  $_numLikes1 = $_checkResult1->rowCount();

  if($_status == "liked") { 
    echo  "<i class='fa-solid fa-heart-crack'></i>&nbsp;Unlike ($_numLikes1)";
  } else if($_status == "disliked") {
    echo "<i class='fa-solid fa-heart'></i>&nbsp;Like ($_numLikes1)";
  }

} catch (Exception $_exception)  {
  require("../php_lib/myExceptionHandling.inc.php");
}
?>