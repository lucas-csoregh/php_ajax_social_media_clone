<?php
try {

  function getFriendNotificationIcon($_nUnsolvedFriendRequests) {
    if($_nUnsolvedFriendRequests > 0) {
      $_nUnsolvedFriendRequests = "
      <span id='friendRequestsAlert' style='transform: scale(0.8);' class='position-absolute bottom-0 end-0 translate-end badge rounded-pill bg-danger'>
        <span id='nFriendRequests'>$_nUnsolvedFriendRequests</span>
        <span class='visually-hidden'>Friend requests</span>
      </span>";
    } else {
      $_nUnsolvedFriendRequests = "";
    }

    return $_nUnsolvedFriendRequests;
  }


} catch (Exception $_exception)  {
  require("../php_lib/myExceptionHandling.inc.php");
}
?>