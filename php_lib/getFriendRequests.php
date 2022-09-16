<?php
try {
  function getFriendRequests($_PDO, $_userID) {
    $_getRequestsQuery = "SELECT * FROM ts_users_has_ts_users WHERE d_receivedRequest='$_userID' AND d_accepted='0'";
    $_getRequestsResults = $_PDO->query($_getRequestsQuery);
    $_nRequests = $_getRequestsResults->rowCount();
    $_output = "";
    while($_row = $_getRequestsResults-> fetch(PDO::FETCH_ASSOC))  {
      $_sentReq = $_row['d_sentRequest'];
      $_getSenderQuery = "SELECT * FROM ts_users WHERE d_user='$_sentReq'";
      $_getSenderResults = $_PDO->query($_getSenderQuery);
      if($_row = $_getSenderResults -> fetch(PDO::FETCH_ASSOC))  {
        $_firstName = $_row['d_firstName'];
        $_lastName = $_row['d_lastName'];
        $_profilePic = $_row['d_profilePic'];
        $_username = $_row['d_username'];
        $_output .= "
        <li class='p-2' id='friendRequest$_sentReq'>
          <div class='d-flex flex-row'>
            <img src='$_profilePic' alt='' width='28' height='28' class='rounded-circle d-block mb-2'>
            <span class='ps-2' style='white-space: nowrap'>
              <a class='profileLink' href='A_profile.php?profile_username=$_username'>$_firstName $_lastName</a>
            </span>
          </div>
          <div class='d-flex flex-row'>
            <button type='button' onclick='acceptFriendRequest($_sentReq)' class='btn btn-primary btn-sm me-1'>Accept</button>
            <button type='button' onclick='ignoreFriendRequest($_sentReq)' class='btn btn-secondary btn-sm'>Ignore</button>
          </div>
        </li>";
        }
    }
    if($_output == "") {
      $_output = "<li class='p-2'>Nothing to show</li>";
    }
    return array($_nRequests, $_output);

  }

} catch (Exception $_exception)  {
  require("../php_lib/myExceptionHandling.inc.php");
}
?>
