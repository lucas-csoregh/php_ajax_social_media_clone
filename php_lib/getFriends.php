<?php
try {
  function getFriends($_PDO, $_user_id) {
    // GET ALL FRIENDS
    $_getFriendsQuery = "SELECT * FROM ts_users_has_ts_users WHERE
    d_sentRequest='$_user_id' AND d_accepted='1'
    OR
    d_receivedRequest='$_user_id' AND d_accepted='1'";
    $_getFriendsResult = $_PDO->query($_getFriendsQuery);
    $_numFriends = $_getFriendsResult->rowCount();

    $_onlineFriends = 0;

    $_output = "";
    while($_row = $_getFriendsResult-> fetch(PDO::FETCH_ASSOC))  {
      $_a = $_row['d_sentRequest'];
      $_b = $_row['d_receivedRequest'];
      $_result = 0;
      if($_a != $_user_id) {
        $_result = $_a;
      } else {
        $_result = $_b;
      }
      $_getFriendDetailsQuery = "SELECT * FROM ts_users WHERE d_user='$_result'";
      $_getFriendDetailsResult = $_PDO->query($_getFriendDetailsQuery);
      while($_row = $_getFriendDetailsResult-> fetch(PDO::FETCH_ASSOC))  {
        $_firstName = $_row['d_firstName'];
        $_lastName = $_row['d_lastName'];
        $_username = $_row['d_username'];
        $_profilePic = $_row['d_profilePic'];
        $_online = $_row['d_online'];


        $_onlineStatus = "";
        if($_online == "1") {
          $_onlineStatus = "bg-primary";
          $_onlineFriends++;
        } else if($_online == "0") {
          $_onlineStatus = "bg-secondary";
        }
            
        $_output .= "<li class='pb-4'>
        <a class='profileLink d-flex flex-row' href='A_profile.php?profile_username=$_username'>
        <div class='onlineIcon $_onlineStatus m-1 border border-light'></div>
        <img src='$_profilePic' alt='' width='28' height='28' class='rounded-circle ms-2 me-2'>
        $_firstName $_lastName
        </a>
        </li>";
      }
    }

    $_output = "<div class='pb-2'>Contacts online: $_onlineFriends/$_numFriends</div>" . $_output;

    return $_output;
  }


} catch (Exception $_exception)  {
  require("../php_lib/myExceptionHandling.inc.php");
}
?>