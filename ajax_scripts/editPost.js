// $_postID = id of post on which we are submitting a comment
function editPost($_postID) {
  console.log("editing post #" + $_postID);
  var newPostBody = CKEDITOR.instances["postEditingArea" + $_postID].getData(); 
  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("contentArea" + $_postID).innerHTML = newPostBody; 
    }
  };
  xmlhttp.open("GET","../ajax_scripts/editPost.php?q="+$_postID+"&n="+newPostBody,true);
  xmlhttp.send();
}