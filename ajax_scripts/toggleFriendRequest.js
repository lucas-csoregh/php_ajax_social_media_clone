function setUnsendFriendRequestButton() {
  friendRequestButton.classList.remove("btn-outline-secondary");
  friendRequestButton.classList.add("btn-outline-danger");
  friendRequestButton.innerHTML = "<i class='fa-solid fa-user-minus'></i>&nbsp;&nbsp;Unsend friend request";
}

function setFriendRequestSentButton() {
  friendRequestButton.classList.remove("btn-outline-danger");
  friendRequestButton.classList.add("btn-outline-secondary");
  friendRequestButton.innerHTML = "<i class='fa-solid fa-user-plus'></i>&nbsp;&nbsp;Friend request sent";
}

function setSendFriendRequestButton() {
  //friendRequestButton.classList.remove("btn-outline-danger");
  friendRequestButton.classList.remove("btn-outline-danger");
  friendRequestButton.classList.remove("btn-danger");
  friendRequestButton.classList.remove("btn-primary");
  friendRequestButton.classList.remove("text-white");
  friendRequestButton.classList.add("btn-outline-primary");
  friendRequestButton.innerHTML = "<i class='fa-solid fa-user-plus'></i>&nbsp;&nbsp;Send friend request";
}

function toggleFriendRequest($_userAddedID) {
  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      // send friendrequest
      var friendRequestButton = document.getElementById("friendRequestButton");
      setFriendRequestSentButton();
      friendRequestButton.addEventListener('mouseover', setUnsendFriendRequestButton);
      friendRequestButton.addEventListener('mouseout', setFriendRequestSentButton);

      //friendRequestButton.setAttribute('onclick', `unsendFriendRequest(${$_userAddedID})`);

    } else if(this.readyState = 4 && this.status == 400) {
      // unsend friendrequest
      var friendRequestButton = document.getElementById("friendRequestButton");
      setSendFriendRequestButton();
      friendRequestButton.removeEventListener('mouseover', setUnsendFriendRequestButton);
      friendRequestButton.removeEventListener('mouseout', setFriendRequestSentButton);

      //friendRequestButton.setAttribute('onclick', `sendFriendRequest(${$_userAddedID})`);
    }
  };
  xmlhttp.open("GET","../ajax_scripts/toggleFriendRequest.php?q="+$_userAddedID,true);
  xmlhttp.send();
}

