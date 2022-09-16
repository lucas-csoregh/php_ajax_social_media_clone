<?php
try {


  function getAllComments($_PDO, $_postID, $_loadedComments, $_userID, $_roll) {
    /* 
    *  $_PDO -> to make queries
    *  $_postID -> to differentiate each comment
    *  $_loadedComments -> the output string
    *  $_userID -> the person logged in 
    *    (we need to know whether or not the user liked
    *    any of the posts and only show the edit button if
    *    the comment was posted by the user viewing the comment)
    */
    $_getAllCommentsOnThisPostQuery = "SELECT * FROM t_posts WHERE d_prevPostID='$_postID'";
    $_getAllCommentsOnThisPostResult = $_PDO->query($_getAllCommentsOnThisPostQuery);

    // INIT NUM COMMENTS
    $_numComments = $_getAllCommentsOnThisPostResult->rowCount();


    $_commentProfilePic = "";


    // LOAD COMMENTS
    $_loadedComments = "";
    while($_row = $_getAllCommentsOnThisPostResult-> fetch(PDO::FETCH_ASSOC))  {
      $_commentPostBody = $_row['d_postBody'];
      $_commentUserID = $_row['d_user'];
      $_commentPostedWhen= $_row['d_postedWhen'];

      require_once("convertTimestamp.php");
      $_commentPostedWhen = convertTimestamp($_commentPostedWhen);

      //$_commentPrevPostID = $_row['d_prevPostID'];
      $_commentPostID = $_row['d_post'];

      $_getCommentPosterDataQuery = "SELECT * FROM ts_users WHERE d_user='$_commentUserID'";
      $_getCommentPosterDataResult = $_PDO->query($_getCommentPosterDataQuery );
      $_commentLastName = "";
      $_commentFirstName = "";
      $_commentUsername = "";
      $_commentProfilePic = "";
      if($_row = $_getCommentPosterDataResult -> fetch(PDO::FETCH_ASSOC))  {
        $_commentLastName = $_row['d_lastName'];
        $_commentFirstName = $_row['d_firstName'];
        $_commentUsername = $_row['d_username'];
        $_commentProfilePic = $_row['d_profilePic'];
      }

      $_getC = "SELECT * FROM t_posts WHERE d_prevPostID='$_commentPostID'";
      $_getCr = $_PDO->query($_getC);

      // INIT NUM COMMENTS !! Made things considerably slower but we need te be able to count the number of likes on any comment
      $_numC = $_getCr->rowCount();
      $_numCommentsOnComment = 0;
      if($_numC != 0)  {
        $_numCommentsOnComment = $_numC;
      }

      $_loadScripts = true;

      // only allow the poster of a post to see the edit post button
      if($_userID == $_commentUserID) {
        $_editButton = 1; // true
      } elseif($_roll == 2) {
        $_editButton = 2; // admin
      }else {
        $_editButton = 0; // false
      }



      // INIT LIKE ICON
      $_checkIfLikeAlreadyExistsQuery = "SELECT * FROM ts_users_likes_t_posts WHERE ts_users_d_user='$_userID' AND t_posts_d_post='$_commentPostID'";
      $_checkIfLikeAlreadyExistsResult= $_PDO->query($_checkIfLikeAlreadyExistsQuery);
      $_myLikes = $_checkIfLikeAlreadyExistsResult->rowCount(); // myLikes = likes the person logged in made on the post in question

      // INIT NUM LIKES
      $_getLikesOnCommentQuery = "SELECT * FROM ts_users_likes_t_posts WHERE t_posts_d_post='$_commentPostID'";
      $_getLikesOnCommentResult = $_PDO->query($_getLikesOnCommentQuery);
      $_numLikesOnComment = $_getLikesOnCommentResult->rowCount();

      if($_myLikes > 0) {
        $_likedByMe = true;
      } else {
        $_likedByMe = false;
      }

      require_once("../templates_php/postTemplate.php");
      $_result  = postTemplate($_commentPostID,
                              $_commentProfilePic,
                              $_commentFirstName,
                              $_commentLastName,
                              $_commentUsername,
                              $_commentPostBody,
                              $_commentPostedWhen,
                              $_loadedComments,
                              $_editButton,
                              $_numCommentsOnComment,
                              $_numLikesOnComment,
                              $_likedByMe,
                              $_loadScripts);
      //$_output = $_result[0];
      $_top = $_result[1];
      $_bottom = $_result[2];

      // LOADING ALL COMMENTS
      $_roll = $_SESSION['rol'];
      $_loadedComments .= $_top;
      if($_numC !=0) {
        $_loadedComments .= getAllComments($_PDO, $_commentPostID, $_loadedComments, $_userID, $_roll)[0];
      }
      $_loadedComments .= $_bottom;
    }

    return array($_loadedComments, $_numComments);
  }


} catch (Exception $_exception)  {
  require("../php_lib/myExceptionHandling.inc.php");
}
?>