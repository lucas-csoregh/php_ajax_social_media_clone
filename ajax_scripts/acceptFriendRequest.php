<?php
try {
  session_start();
  require("../connections/pdo.inc.php");
  $_user_id = $_SESSION['user_id'];
  $_sentRequest = $_GET['q']; // the user that sent us a request which we want to accept

  $_acceptFriendRequestQuery = "UPDATE ts_users_has_ts_users SET d_accepted='1' WHERE d_sentRequest='$_sentRequest' AND d_receivedRequest='$_user_id'";
  $_PDO->query($_acceptFriendRequestQuery);
  $_deleteViceVersa = "DELETE FROM ts_users_has_ts_users WHERE d_sentRequest='$_user_id' AND d_receivedRequest='$_sentRequest' AND d_accepted='0'";
  $_PDO->query($_deleteViceVersa);

  $_getFriendDetailsQuery = "SELECT * FROM ts_users WHERE d_user='$_sentRequest'";
  $_getFriendDetailsResult = $_PDO->query($_getFriendDetailsQuery);
  if($_row = $_getFriendDetailsResult-> fetch(PDO::FETCH_ASSOC))  {
    $_firstName = $_row['d_firstName'];
    $_lastName = $_row['d_lastName'];
    $_username = $_row['d_username'];
    $_profilePic = $_row['d_profilePic'];
            
        
    echo "<li class='pb-3'>
    <a class='profileLink d-flex flex-row' href='A_profile.php?profile_username=$_username'>
    <img src='$_profilePic' alt='' width='28' height='28' class='rounded-circle me-2'>
    $_firstName $_lastName
    </a>
    </li>";
  }

} catch (Exception $_exception)  {
  require("../php_lib/myExceptionHandling.inc.php");
}

//echo "<i class='fa-solid fa-user-plus'></i>&nbsp;&nbsp;Friend";
?>