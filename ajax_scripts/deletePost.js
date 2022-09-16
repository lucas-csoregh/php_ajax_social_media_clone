function deletePost($_postID) {
  //console.log("comment on d_post #" + $_postID);
  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("post" + $_postID).remove();
    }
  };
  xmlhttp.open("GET","../ajax_scripts/deletePost.php?q="+$_postID,true);
  xmlhttp.send();
}