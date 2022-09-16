<?php
try
{
  //********** initalisatie
  require("../php_lib/initialisatie.php");
  //$_user_id = $_SESSION['user_id'];

  //********** PAGE CONTENT
  require_once("../php_lib/getPosts.php");

  $_user_id= $_SESSION['user_id'];
  //********** output
  //$_menu =  0;
  //$_commentaar = 'A_home_C.html'; 
  $_profilePic = $_SESSION['profilePic'];
  $_fullName = $_SESSION['firstName'] . " " . $_SESSION['lastName'];
  $_username = $_SESSION['username'];

  $_postButton = "
  <li class='nav-item me-2'>
    <a href='#' class='nav-link active' title='Create post'>
      <i class='fa-solid fa-pen-to-square fa-xl' data-bs-toggle='collapse' data-bs-target='#collapseExample' aria-expanded='false' aria-controls='collapseExample' title='Create post'></i>
    </a>
  </li>
  ";

  require_once("../templates_php/postAreaTemplate.php");
  $_postArea = getPostArea();

  require_once("../php_lib/getFriends.php");
  
  $_getFriends = getFriends($_PDO, $_user_id);
  $_rflank = "";
  $_rflank .= "<div id='friendsList'>".$_getFriends."</div>";
  $_lflank = "";

  require_once("../php_lib/getFriendRequests.php");
  $_requestsResuls = getFriendRequests($_PDO, $_user_id);
  $_friendRequests = $_requestsResuls[1];
  $_nUnsolvedFriendRequests = $_requestsResuls[0]; 

  require_once("../templates_php/friendNotificationIconTemplate.php");
  $_nUnsolvedFriendRequests = getFriendNotificationIcon($_nUnsolvedFriendRequests);

  require("../code/output.inc.php"); 
} catch (Exception $_exception)  {
  require("../php_lib/myExceptionHandling.inc.php");
}
?>