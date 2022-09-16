function unfriend($_userToUnfriend) {
  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      var friendRequestButton = document.getElementById("friendRequestButton")
      if(friendRequestButton) {
        /*
        friendRequestButton.classList.remove("btn-outline-primary");
        friendRequestButton.classList.add("btn-primary");
        friendRequestButton.innerHTML = this.responseText;
        */
        setSendFriendRequestButton();
        friendRequestButton.setAttribute('onclick', `toggleFriendRequest(${$_userToUnfriend})`);
        friendRequestButton.removeEventListener("mouseover", setUnfriendButton);
        friendRequestButton.removeEventListener("mouseout", setFriendButton);
      }
    }
  };
  xmlhttp.open("GET","../ajax_scripts/unfriend.php?q="+$_userToUnfriend,true);
  xmlhttp.send();
}