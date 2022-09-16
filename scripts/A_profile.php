<?php
try
{

  require_once("../php_lib/getFriendButton.php"); 

  session_start();
  require("../connections/pdo.inc.php");
  //$_usernameLoggedOn = $_SESSION['username'];

  $_user_id= $_SESSION['user_id'];

  if(isset($_GET['profile_username'])) {
    $_username = $_GET['profile_username'];
    
    $_query = "SELECT * FROM ts_users WHERE d_username='$_username'";
    $_result = $_PDO->query($_query);
    $_nUsernameMatches = $_result->rowCount();
    if($_nUsernameMatches > 0) {
      $_inhoud = "";

      if($_row = $_result-> fetch(PDO::FETCH_ASSOC))  {
        $_profileUser = $_row['d_user'];
      } else {
        $_profileUser = 0;
      }
      require("../php_lib/getProfilePosts.php"); 


      // only show option to post on profile if it is your own profile
      if($_profileUser == $_user_id) {

        $_postButton = "
        <li class='nav-item me-2'>
          <a href='#' class='nav-link active' title='Create post'>
            <i class='fa-solid fa-pen-to-square fa-xl' data-bs-toggle='collapse' data-bs-target='#collapseExample' aria-expanded='false' aria-controls='collapseExample' title='Create post'></i>
          </a>
        </li>
        ";

        require_once("../templates_php/postAreaTemplate.php");
        $_postArea = getPostArea();
        $_rflank = "";
        $_lflank = "";
      } else {

        $_postButton = "";
        $_postArea = "";
        $_lflank = "";
        $_rflank = "";
      }

      $_lflank .= getfriendButton($_profileUser, $_user_id, $_PDO);


      require_once("../php_lib/getFriendRequests.php");
      $_requestsResuls = getFriendRequests($_PDO, $_user_id);
      $_friendRequests = $_requestsResuls[1];
      $_nUnsolvedFriendRequests = $_requestsResuls[0]; 

      require_once("../templates_php/friendNotificationIconTemplate.php");
      $_nUnsolvedFriendRequests = getFriendNotificationIcon($_nUnsolvedFriendRequests);

      $_profilePic = $_SESSION['profilePic'];
      $_fullName = $_SESSION['firstName'] . " " . $_SESSION['lastName'];
      $_username = $_SESSION['username'];

      require("../code/output.inc.php");
    } else {
      header("Location: A_home.php");
    }

  }

} catch (Exception $_exception)  {
  require("../php_lib/myExceptionHandling.inc.php");
}
?>