// $_postID = id of post on which we are submitting a comment
function submitComment($_postID) {
  var comment = CKEDITOR.instances["commentArea" + $_postID].getData(); 
  //console.log("comment on d_post #" + $_postID);
  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      //document.getElementById("commentMsg" + $_postID).innerHTML = this.responseText;
      document.getElementById("commentSection" + $_postID).insertAdjacentHTML('afterbegin', this.responseText);
      CKEDITOR.instances["commentArea" + $_postID].setData('');
      $_numComments = parseInt(document.getElementById("numComments" + $_postID).innerHTML) +1;
      document.getElementById("numComments" + $_postID).innerHTML = $_numComments;

      $_commentPostID = this.getResponseHeader('postID');
      //console.log( 'postEditingArea' + $_commentPostID);
      CKEDITOR.replace( 'postEditingArea' + $_commentPostID); 
      //console.log( 'commentArea' + $_commentPostID);
      CKEDITOR.replace( 'commentArea' + $_commentPostID); 
    }
  };
  xmlhttp.open("GET","../ajax_scripts/submitComment.php?q="+$_postID+"&c="+comment,true);
  xmlhttp.send();
}