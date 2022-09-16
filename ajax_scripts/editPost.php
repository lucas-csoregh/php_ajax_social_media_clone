<?php
try {

  session_start();
  require("../connections/pdo.inc.php");
  $_user_id = $_SESSION['user_id'];
  $_postID = intval($_GET['q']);
  $_newPostBody = $_GET['n']; // edited version of the post body
  $_postedWhen= time();

  $_query = "UPDATE t_posts
  SET d_postBody='$_newPostBody' 
  WHERE d_post='$_postID'";
  $_PDO->query($_query);

} catch (Exception $_exception)  {
  require("../php_lib/myExceptionHandling.inc.php");
}

?>