<?php
try {
  // Unpack details about a post and who posted it
  $_query = "SELECT * FROM t_posts WHERE d_prevPostID='0' ORDER BY d_postedWhen DESC";
  $_result = $_PDO->query($_query);
  while($_row = $_result-> fetch(PDO::FETCH_ASSOC)) 
  {	

    /***************
    * POST DETAILS *
    ****************/

    // INIT POST DETAILS //
    $_postID = $_row['d_post'];
    $_prevPostID = $_row['d_prevPostID'];
    $_postBody = $_row['d_postBody'];
    $_postedWhen = $_row['d_postedWhen'];

    require_once("convertTimestamp.php");
    $_postedWhen = convertTimestamp($_postedWhen);

    $_posterID = $_row['d_user'];
    // INIT POSTER DETAILS //
    $_getPosterDetailsQuery = "SELECT * FROM ts_users WHERE d_user='$_posterID'";
    $_getPosterDetailsResult = $_PDO->query($_getPosterDetailsQuery);

    $_lastName = "";
    $_firstName = "";
    $_username = "";
    $_profilePic = "";
    if ($_row1 = $_getPosterDetailsResult->fetch(PDO::FETCH_ASSOC)) {
      $_lastName = $_row1['d_lastName'];
      $_firstName = $_row1['d_firstName'];
      $_username = $_row1['d_username'];
      $_profilePic = $_row1['d_profilePic'];
    }

    $_user_id = $_SESSION['user_id'];


  /***********
    * COMMENTS *
    ************/

    $_roll = $_SESSION['rol'];

    $_numComments = 0;
    $_loadedComments = "";
    require_once("../php_lib/getComments.php");
    $_res = getAllComments($_PDO, $_postID, $_loadedComments, $_user_id, $_roll);
    $_loadedComments .= $_res[0];
    $_numComments = $_res[1];
    
    /********
    * POSTS *
    ********/

    // only allow the poster of a post to see the edit post button
    if($_user_id == $_posterID) {
      $_editButton = 1; // true
    } elseif($_roll == 2) {
      $_editButton = 2; // admin
    }else {
      $_editButton = 0; // false
    }

    /********
    * LIKES *
    *********/

    // INIT NUM LIKES
    $_getNumLikesQuery = "SELECT * FROM ts_users_likes_t_posts WHERE t_posts_d_post='$_postID'";
    $_getNumLikesResult = $_PDO->query($_getNumLikesQuery);
    $_numLikes = $_getNumLikesResult->rowCount();

    // INIT LIKE ICON
    $_checkIfLikeAlreadyExistsQuery = "SELECT * FROM ts_users_likes_t_posts WHERE ts_users_d_user='$_user_id' AND t_posts_d_post='$_postID'";
    $_checkIfLikeAlreadyExistsResult= $_PDO->query($_checkIfLikeAlreadyExistsQuery);
    $_myLikes = $_checkIfLikeAlreadyExistsResult->rowCount(); // myLikes = likes the person logged in made on the post in question

    if($_myLikes > 0) {
      $_likedByMe = true;
    } else {
      $_likedByMe = false;
    }



    // USING POSTTEMPLATE
    require_once("../templates_php/postTemplate.php");
    $_loadScripts = true;
    $_inhoud .= postTemplate($_postID,
                            $_profilePic,
                            $_firstName,
                            $_lastName,
                            $_username,
                            $_postBody,
                            $_postedWhen,
                            $_loadedComments,
                            $_editButton,
                            $_numComments,
                            $_numLikes,
                            $_likedByMe,
                            $_loadScripts)[0];
  }

} catch (Exception $_exception)  {
  require("../php_lib/myExceptionHandling.inc.php");
}
?>