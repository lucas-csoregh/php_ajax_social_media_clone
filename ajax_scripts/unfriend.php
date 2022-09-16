<?php
try {
  session_start();
  require("../connections/pdo.inc.php");
  $_user_id = $_SESSION['user_id'];
  $_userToUnfriend = $_GET['q']; // the user that sent us a request which we want to accept

  $_deleteFriend = "DELETE FROM ts_users_has_ts_users WHERE d_sentRequest='$_userToUnfriend' AND d_receivedRequest='$_user_id' AND d_accepted='1'";
  $_PDO->query($_deleteFriend);
  $_deleteViceVersa = "DELETE FROM ts_users_has_ts_users WHERE d_sentRequest='$_user_id' AND d_receivedRequest='$_userToUnfriend' AND d_accepted='1'";
  $_PDO->query($_deleteViceVersa);

  //echo "<i class='fa-solid fa-user-plus'></i>&nbsp;&nbsp;Friend";

} catch (Exception $_exception)  {
  require("../php_lib/myExceptionHandling.inc.php");
}
?>