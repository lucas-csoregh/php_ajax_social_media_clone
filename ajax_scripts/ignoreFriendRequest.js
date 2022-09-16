function ignoreFriendRequest($_sentRequest) {
  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("friendRequest" + $_sentRequest).remove();
      var nReq = document.getElementById("nFriendRequests");
      var nRequests = parseInt(nReq.innerHTML);
      if(nRequests >= 2) {
        nReq.innerHTML = nRequests-1;
      } else {
        document.getElementById("fiendRequests").innerHTML = "<li class='p-2'>Nothing to show</li>";
        document.getElementById("friendRequestsAlert").remove();
      }
    }
  };
  xmlhttp.open("GET","../ajax_scripts/ignoreFriendRequest.php?q="+$_sentRequest,true);
  xmlhttp.send();
}