function acceptFriendRequest($_sentRequest) {
  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      // TODO: decrement the number of unseen friend requests next to the notification icon
      document.getElementById("friendRequest" + $_sentRequest).remove();

      var nReq = document.getElementById("nFriendRequests");
      var nRequests = parseInt(nReq.innerHTML);
      if(nRequests >= 2) {
        nReq.innerHTML = nRequests-1;
      } else {
        document.getElementById("fiendRequests").innerHTML = "<li class='p-2'>Nothing to show</li>";
        document.getElementById("friendRequestsAlert").remove();
      }

      var friendRequestButton = document.getElementById("friendRequestButton")
      if(friendRequestButton) {
        /*
        friendRequestButton.classList.remove("btn-outline-primary");
        friendRequestButton.classList.add("btn-primary");
        friendRequestButton.innerHTML = this.responseText;
        */
        friendRequestButton.setAttribute('onclick', `unfriend(${$_sentRequest})`);
        setFriendButton();
        friendRequestButton.addEventListener("mouseover", setUnfriendButton);
        friendRequestButton.addEventListener("mouseout", setFriendButton);
      }

      var friendsList = document.getElementById("friendsList");
      var addedFriend = this.response;
      friendsList.innerHTML = addedFriend + friendsList.innerHTML;
    }
  };
  xmlhttp.open("GET","../ajax_scripts/acceptFriendRequest.php?q="+$_sentRequest,true);
  xmlhttp.send();
}

// TODO: optimize functions, remove unneccessary actions
function setFriendButton() {
  friendRequestButton.classList.remove("btn-outline-primary");
  friendRequestButton.classList.remove("btn-danger");
  friendRequestButton.classList.add("btn-primary");
  friendRequestButton.classList.add("text-white");
  friendRequestButton.innerHTML = "<i class='fa-solid fa-user-group'></i>&nbsp;&nbsp;Friends";
  //friendRequestButton.setAttribute('onclick', 'sendFriendRequest($_sentRequest)');
} 
function setUnfriendButton() {
  friendRequestButton.classList.remove("btn-primary");
  friendRequestButton.classList.remove("btn-secondary");
  friendRequestButton.classList.add("btn-danger");
  friendRequestButton.classList.add("text-white");
  friendRequestButton.innerHTML = "<i class='fa-solid fa-user-minus'></i>&nbsp;&nbsp;Unfriend";
  //friendRequestButton.setAttribute('onclick', 'unFriend($_sentRequest)');
}

/*
var friendRequestButton = document.getElementById("friendRequestButton")
if(friendRequestButton) {
  setFriendButton();
}
friendRequestButton.addEventListener("mouseover", setUnfriendButton);
friendRequestButton.addEventListener("mouseout", setFriendButton);
*/