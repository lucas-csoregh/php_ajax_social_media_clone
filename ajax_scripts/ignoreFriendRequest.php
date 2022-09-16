<?php
try {
  session_start();
  require("../connections/pdo.inc.php");
  $_user_id = $_SESSION['user_id'];
  $_sentRequest = $_GET['q']; // the user that sent us a request which we want to accept

  /*
  $_deleteRequests = "DELETE FROM ts_users_has_ts_users WHERE
  d_sentRequest='$_user_id' AND d_receivedRequest='$_sentRequest' AND d_accepted='0'
  OR
  d_sentRequest='$_sentRequest' AND d_receivedRequest='$_user_id' AND d_accepted='0'";
  */
  $_deleteRequests = "DELETE FROM ts_users_has_ts_users WHERE d_sentRequest='$_sentRequest' AND d_receivedRequest='$_user_id' AND d_accepted='0'";
  $_PDO->query($_deleteRequests);

  //echo "<i class='fa-solid fa-user-plus'></i>&nbsp;&nbsp;Friend";


} catch (Exception $_exception)  {
  require("../php_lib/myExceptionHandling.inc.php");
}
?>