<?php
try {
  session_start();
  require("../connections/pdo.inc.php");
  $_user_id = $_SESSION['user_id'];
  $_prevPostID = intval($_GET['q']);
  $_postBody= $_GET['c']; // the comment
  $_postedWhen= time();
  $_postedWhenText= "Just now";

  $_getMaxPostID = "SELECT MAX(d_post) as d_post FROM t_posts";
  $_result = $_PDO->query($_getMaxPostID);
  $_postID = 0;
  if($_row = $_result-> fetch(PDO::FETCH_ASSOC)) {
    $_postID = intval($_row['d_post']) + 1;
  }

  $_insertCommentQuery = "INSERT INTO 
  t_posts (d_post, d_prevPostID, d_postBody, d_postedWhen, d_user) 
  VALUES ('$_postID', '$_prevPostID', '$_postBody', '$_postedWhen', '$_user_id')"; 

  $_PDO->query($_insertCommentQuery);

  $_lastName= $_SESSION['lastName'];
  $_firstName= $_SESSION['firstName'];
  $_profilePic= $_SESSION['profilePic'];
  $_username = $_SESSION['username'];
  //$_username = "";

  // USING POSTTEMPLATE
  require_once("../templates_php/postTemplate.php");
  $_loadedComments = "";
  $_numComments = 0;
  $_likeIcon = "<i class='fa-solid fa-heart'></i>&nbsp;Like (0)";
  $_editButton = true;
  $_loadScripts = false;


  $_numLikes = 0;
  $_likedByMe = false;
  echo postTemplate($_postID,
                    $_profilePic,
                    $_firstName,
                    $_lastName,
                    $_username,
                    $_postBody,
                    $_postedWhenText,
                    $_loadedComments,
                    $_editButton,
                    $_numComments,
                    $_numLikes,
                    $_likedByMe, 
                    $_loadScripts)[0];

  header("postID: $_postID", true, 200);

} catch (Exception $_exception)  {
  require("../php_lib/myExceptionHandling.inc.php");
}


?>