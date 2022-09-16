<?php
try {

  function getFriendButton($_profileUser, $_user_id, $_PDO) {
    if($_user_id != $_profileUser) {
      // TODO: only show add friend button if the user is not already friends with the loaded profile
      $_isFriendQuery = "SELECT * FROM ts_users_has_ts_users WHERE
      d_sentRequest='$_user_id' AND d_receivedRequest='$_profileUser' AND d_accepted='1'
      OR
      d_sentRequest='$_profileUser' AND d_receivedRequest='$_user_id' AND d_accepted='1'";
      $_isFriendResult = $_PDO->query($_isFriendQuery);
      $_nResults = $_isFriendResult->rowCount();
      if($_nResults <= 0) {
          $_haveSentRequestQuery = "SELECT * FROM ts_users_has_ts_users WHERE
          d_sentRequest='$_user_id' AND d_receivedRequest='$_profileUser'";
          $_haveSentRequestResult = $_PDO->query($_haveSentRequestQuery);
          $_nRequests = $_haveSentRequestResult->rowCount();
          if($_nRequests > 0) {
            // Show 'friend request sent' button when you've already sent the user a request
            $_friendButton= "
              <div class='pt-4'>
              <button id='friendRequestButton' onclick='toggleFriendRequest($_profileUser)' class='btn btn-outline-secondary'><i class='fa-solid fa-user-plus'></i>&nbsp;&nbsp;Friend request sent</button>
              </div>

              <script>
              var friendRequestButton = document.getElementById('friendRequestButton');
              friendRequestButton.addEventListener('mouseover', setUnsendFriendRequestButton);
              friendRequestButton.addEventListener('mouseout', setFriendRequestSentButton);
              </script>";
          } else {
            // Only show add friend button if the user is not already friends with the loaded profile
            $_friendButton = "
            <div class='pt-4'>
            <button id='friendRequestButton' onclick='toggleFriendRequest($_profileUser)' class='btn btn-outline-primary'><i class='fa-solid fa-user-plus'></i>&nbsp;&nbsp;Send friend request</button>
            </div>";
          }
          
      } else {
        // Show 'friend' when user is already friends with visited profile
        $_friendButton= "
        <div class='pt-4'>
        <button id='friendRequestButton' onclick='unfriend($_profileUser)' class='btn btn-primary'><i class='fa-solid fa-user-group'></i>&nbsp;&nbsp;Friends</button>
        </div>

        <script>
        var friendRequestButton = document.getElementById('friendRequestButton');
        friendRequestButton.addEventListener('mouseover', setUnfriendButton);
        friendRequestButton.addEventListener('mouseout', setFriendButton);
        </script>
        ";
      }
    } else {
      $_friendButton = "";
    }
    return $_friendButton;
  }

} catch (Exception $_exception)  {
  require("../php_lib/myExceptionHandling.inc.php");
}
?>