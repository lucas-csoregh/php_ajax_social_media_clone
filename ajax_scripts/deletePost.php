<?php
try {
  session_start();
  require("../connections/pdo.inc.php");
  $_user_id = $_SESSION['user_id'];
  $_postID = $_GET['q']; // root comment we want to delete

    // TODO: all recursive functions could use some performance tuning
    
  function getAllReplies($_PDO, $_postID, $_userID) {
    // select all id's (PK's) of posts that are comments on $_postID
    $_query = "SELECT d_post FROM t_posts WHERE d_prevPostID='$_postID'";
    $_result = $_PDO->query($_query);
    $_showArr = "";

    while($_row = $_result -> fetch(PDO::FETCH_ASSOC))  {
      $_subPostID = $_row['d_post'];
      //$_showArr .= "postID: $_postID | $_query | subPostID: $_subPostID<br><br>";
      $_showArr .= "$_subPostID, ";
      //echo getAllReplies($_PDO, $_subPostID, $_userID);
      $_showArr .= getAllReplies($_PDO, $_subPostID, $_userID);
    }

    return $_showArr;
  }

  $_output = "";
  $_output .= "$_postID, ";
  $_output .= getAllReplies($_PDO, $_postID, $_user_id);
  $_output = substr($_output, 0, -2);
  $_deletePostsQuery = "DELETE FROM t_posts WHERE d_post IN (";
  $_deletePostsQuery .= $_output;
  $_deletePostsQuery .= ");";

  $_deleteLikesQuery = "DELETE FROM ts_users_likes_t_posts WHERE t_posts_d_post IN (";
  $_deleteLikesQuery .= $_output;
  $_deleteLikesQuery .= ");";

  //echo $_deleteQuery . "<br><br>" . $_deleteQuery1;
  $_PDO->query($_deleteLikesQuery);
  $_PDO->query($_deletePostsQuery);

} catch (Exception $_exception)  {
  require("../php_lib/myExceptionHandling.inc.php");
}

?>
