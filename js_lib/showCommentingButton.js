function showCommentingButton($_postID) {

  var commentingButton = document.getElementById("commentingButton" + $_postID);
  var numComments = parseInt(document.getElementById("numComments" + $_postID).innerHTML);

  if(commentingButton.classList.contains("d-none")) {
    commentingButton.classList.remove("d-none")
  } else {
    commentingButton.classList.add("d-none")
  }

}