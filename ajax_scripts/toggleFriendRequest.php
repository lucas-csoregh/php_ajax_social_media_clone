<?php
try {
  session_start();
  require("../connections/pdo.inc.php");
  $_user_id = $_SESSION['user_id']; // user logged in
  $_userAddedID = $_GET['q']; // the user we want to send a request to

  //$_postedWhen = time();


  $_sentRequestAlreadyQuery = "SELECT * FROM ts_users_has_ts_users WHERE d_sentRequest='$_user_id' AND d_receivedRequest='$_userAddedID' AND d_accepted='0'";
  $_sentRequestAlreadyResult = $_PDO->query($_sentRequestAlreadyQuery);
  $_nRequests = $_sentRequestAlreadyResult->rowCount();

  if($_nRequests == 0) {
    $_friendRequestQuery = "INSERT INTO ts_users_has_ts_users
      (d_sentRequest,
      d_receivedRequest,
      d_accepted) 
      VALUES 
      ('$_user_id',
      '$_userAddedID', 
      '0')";

    $_PDO->query($_friendRequestQuery);
    //echo "<i class='fa-solid fa-user-plus'></i>&nbsp;&nbsp;Friend request sent";
    header("status: success", true, 200);
  } else {
    $_deleteRequestQuery = "DELETE FROM ts_users_has_ts_users WHERE d_sentRequest='$_user_id' AND d_receivedRequest='$_userAddedID' AND d_accepted='0'";

    $_PDO->query($_deleteRequestQuery);
    header("status: failed", true, 400);
  }

} catch (Exception $_exception)  {
  require("../php_lib/myExceptionHandling.inc.php");
}

?>
