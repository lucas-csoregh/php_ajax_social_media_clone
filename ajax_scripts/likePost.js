function likePost($_postID) {
  //console.log("clicked d_post #" + $_postID + "'s like button");
  if ($_postID == "") {
    document.getElementById("likeButton" + $_postID).innerHTML = "<i class='fa-solid fa-heart'></i>&nbsp;Like (0)";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("likeButton" + $_postID).innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET","../ajax_scripts/likePost.php?q="+$_postID,true);
    xmlhttp.send();
  }
}